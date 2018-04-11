<?php

/*
 * Copyright (C) 2017 Anders Lövgren (QNET).
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace UUP\Web\Component\Container;

use FilesystemIterator;
use RuntimeException;
use SplFileInfo;
use UUP\Web\Component\Container;

/**
 * Directory index component.
 *
 * Provides functionality similar to Apache directory index. The default is to list files 
 * and directories from current directory only. 
 * 
 * @property-read array $files All files and directories in index.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class DirectoryIndex extends Container
{

        /**
         * Only process current directory.
         */
        const DEPTH_CURRENT = 0;
        /**
         * Include immediate sub directories.
         */
        const DEPTH_IMMEDIATE = 1;
        /**
         * Include all sub directories.
         */
        const DEPTH_INFINITE = PHP_INT_MAX;
        /**
         * Sort on name.
         */
        const SORT_NAME = "name";
        /**
         * Sort on type.
         */
        const SORT_TYPE = "type";
        /**
         * Sort on size.
         */
        const SORT_SIZE = "size";
        /**
         * Sort on time.
         */
        const SORT_TIME = "time";
        /**
         * Sort on path.
         */
        const SORT_PATH = "path";
        /**
         * Sort on MIME type.
         */
        const SORT_MIME = "mime";
        /**
         * Sort as file system explorer.
         */
        const SORT_BROWSE = "browse";
        /**
         * Order sort ascending.
         */
        const ORDER_ASC = 1;
        /**
         * Order sort descending.
         */
        const ORDER_DESC = 2;

        /**
         * The sub directory decent level.
         * @var int 
         */
        public $depth = self::DEPTH_CURRENT;
        /**
         * The directory to scan.
         * @var string 
         */
        public $path = ".";
        /**
         * The sort field.
         * @var string 
         */
        public $sort;
        /**
         * The sort order.
         * @var int 
         */
        public $order = self::ORDER_ASC;
        /**
         * Include directories in listing.
         * @var boolean 
         */
        public $dirs = true;
        /**
         * Exclude filter for site map.
         * @var array 
         */
        public $exclude = array(
                'name' => array(
                        '.svn', '.git', '.github', '.ssh', 'admin', 'vendor', 'config',
                        'cache', 'temp', 'logs', 'nbproject', 'node_modules', 'htpasswd'
                ),
                'file' => array(
                        '.hidden'
                )
        );
        /**
         * The collection of files.
         * @var array 
         */
        private $_files;
        /**
         * Relative path.
         * @var string 
         */
        private $_pathrel;
        /**
         *
         * @var string 
         */
        private $_pathabs;

        public function __construct($path = null)
        {
                parent::__construct('directoryindex', $path);
        }

        public function __get($name)
        {
                if ($name == 'files') {
                        return $this->getFiles();
                }
        }

        /**
         * Get all files.
         */
        public function getFiles()
        {
                if (!isset($this->_files)) {
                        $this->setFiles();
                }

                return $this->_files;
        }

        /**
         * Set files array.
         * @throws RuntimeException
         */
        private function setFiles()
        {
                if (!file_exists($this->path)) {
                        throw new RuntimeException("The index directory don't exist");
                }

                $this->_pathrel = $this->path;
                $this->_pathabs = realpath($this->path);
                $this->_files = array();

                $this->collect();
                $this->sort();
        }

        /**
         * Collect directory index files and directories.
         */
        private function collect()
        {
                $this->addPath($this->_pathabs);
        }

        /**
         * Sort directory index files.
         */
        private function sort()
        {
                if (!isset($this->sort)) {
                        return;
                }

                uasort($this->_files, function($a, $b) {
                        if ($this->sort == self::SORT_BROWSE) {
                                return
                                    strnatcmp($a['type'], $b['type']) * 2 +
                                    strnatcmp($a['path'], $b['path']);
                        } elseif ($this->order == self::ORDER_ASC) {
                                return strnatcmp($a[$this->sort], $b[$this->sort]);
                        } else {
                                return strnatcmp($b[$this->sort], $a[$this->sort]);
                        }
                });
        }

        /**
         * Add directory index.
         * 
         * @param string $path The directory path.
         * @param int $level The recursion level.
         */
        private function addPath($path, $level = 0)
        {
                $iterator = new FilesystemIterator($path, FilesystemIterator::SKIP_DOTS);

                foreach ($iterator as $fileinfo) {
                        if ($fileinfo->isReadable()) {
                                $this->addEntry($fileinfo);
                        } else {
                                continue;
                        }
                        if ($fileinfo->isLink()) {
                                continue;
                        }
                        if ($fileinfo->isDir() && $level < $this->depth) {
                                $this->addPath($fileinfo->getRealPath(), $level + 1);
                        }
                }
        }

        /**
         * Add file entry.
         * @param SplFileInfo $fileinfo The file info object.
         */
        private function addEntry($fileinfo)
        {
                if ($this->isExcluded($fileinfo)) {
                        return;
                }

                if ($fileinfo->isLink()) {
                        $this->addLink($fileinfo);
                } elseif ($fileinfo->isDir()) {
                        $this->addDirectory($fileinfo);
                } elseif ($fileinfo->isFile()) {
                        $this->addFile($fileinfo);
                }
        }

        /**
         * Add standard file.
         * @param SplFileInfo $fileinfo The file info object.
         */
        private function addFile($fileinfo)
        {
                array_push($this->_files, $this->getFile($fileinfo));
        }

        /**
         * Add symbolic link.
         * @param SplFileInfo $fileinfo The file info object.
         */
        private function addLink($fileinfo)
        {
                if ($fileinfo->isDir()) {
                        array_unshift($this->_files, $this->getLink($fileinfo));
                } else {
                        array_push($this->_files, $this->getLink($fileinfo));
                }
        }

        /**
         * Add directory.
         * @param SplFileInfo $fileinfo The file info object.
         */
        private function addDirectory($fileinfo)
        {
                array_unshift($this->_files, $this->getDirectory($fileinfo));
        }

        /**
         * Get file entry.
         * 
         * @param SplFileInfo $fileinfo The file info object.
         * @return array
         */
        private function getFile($fileinfo)
        {
                return array(
                        'name' => $fileinfo->getFilename(),
                        'type' => $fileinfo->getType(),
                        'size' => $fileinfo->getSize(),
                        'time' => strftime("%x %X", filemtime($fileinfo->getRealPath())),
                        'path' => $this->getPathname($fileinfo),
                        'mime' => mime_content_type($fileinfo->getRealPath())
                );
        }

        /**
         * Get link entry.
         * 
         * @param SplFileInfo $fileinfo The file info object.
         * @return array
         */
        private function getLink($fileinfo)
        {
                return array(
                        'name' => $fileinfo->getLinkTarget(),
                        'type' => $fileinfo->getType(),
                        'size' => $fileinfo->getSize(),
                        'time' => strftime("%x %X", filemtime($fileinfo->getRealPath())),
                        'path' => $this->getPathname($fileinfo),
                        'mime' => mime_content_type($fileinfo->getRealPath())
                );
        }

        /**
         * Get directory entry.
         * 
         * @param SplFileInfo $fileinfo The file info object.
         * @return array
         */
        private function getDirectory($fileinfo)
        {
                return array(
                        'name' => $fileinfo->getFilename(),
                        'type' => $fileinfo->getType(),
                        'size' => $fileinfo->getSize(),
                        'time' => strftime("%x %X", filemtime($fileinfo->getRealPath())),
                        'path' => $this->getPathname($fileinfo),
                        'mime' => mime_content_type($fileinfo->getRealPath())
                );
        }

        /**
         * Get relative filepath.
         * 
         * @param SplFileInfo $fileinfo The file info object.
         * @return string
         */
        private function getPathname($fileinfo)
        {
                $name = substr($fileinfo->getPathname(), strlen($this->_pathabs) + 1);

                if ($this->_pathrel != '.') {
                        return $this->_pathrel . '/' . $name;
                } else {
                        return $name;
                }
        }

        /**
         * Should entry be included in listing?
         * 
         * @param SplFileInfo $fileinfo The file info object.
         * @return bool
         */
        private function isExcluded($fileinfo)
        {
                if ($fileinfo->isReadable() == false) {
                        return true;
                }
                if ($fileinfo->isDir() && $this->dirs == false) {
                        return true;
                }
                if (in_array($fileinfo->getBasename(), $this->exclude['name'])) {
                        return true;
                }
                if ($this->isDisplayable($fileinfo->getRealPath()) == false) {
                        return true;
                }
        }

        /**
         * This directory can be displayed.
         * @return bool 
         */
        public function isDisplayable($path)
        {
                foreach ($this->exclude['file'] as $file) {
                        if (file_exists(sprintf("%s/%s", $path, $file))) {
                                return false;
                        }
                }

                return true;
        }

}
