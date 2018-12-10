<?php

/*
 * Copyright (C) 2017-2018 Anders Lövgren (Nowise Systems).
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
 * Download compoment.
 * 
 * The downloadable files are divided in first and older. The first file is the primary
 * download target and is by default the file with largest version (as natural sorted on 
 * file-x.y.z). 
 * 
 * If sorting don't apply (perhaps all files have random names), then the primary target 
 * can be hardcoded in the filesystem by creating a symbolic link and setting the latest
 * property accordingly:
 * 
 *   dir/
 *    +-- latest -> file1
 *    +-- file1           // accessed thru first
 *    +-- file2           // accessed thru older
 *   ...
 *    +-- fileN           // accessed thru older
 * 
 * Each file has a name, size, time and path key in the data returned. Notice that when
 * scanning for files with compound extension (like tar.gz-files), then set the file 
 * extension to last part (i.e. use gz for tar.gz).
 * 
 * If a download wrapper script is going to be used (i.e. if authetication is required 
 * or download statistics is collected), then set the format string to generate download 
 * links of the id, path and file arguments:
 * 
 * <code>
 * $download->format = 'script.php?file=%3$s&from=%1$s';
 * </code>
 * 
 * @property-read array $first The primary download file.
 * @property-read array $older Older download files.
 * @property-read array $files All downloadable files.
 * 
 * @property-read array $secure The associated security files.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Download extends Container
{

        /**
         * Sort by name (natural compare).
         */
        const SORT_NAME = 'name';
        /**
         * Sort on datetime (natural compare).
         */
        const SORT_TIME = 'time';
        /**
         * Sort on file size.
         */
        const SORT_SIZE = 'size';
        /**
         * Sort on UNIX timestamp.
         */
        const SORT_UNIX = 'unix';

        /**
         * Unique ID for download list.
         * @var string 
         */
        public $id;
        /**
         * The directory containing files.
         * @var string 
         */
        public $path = "download";
        /**
         * The name of this download.
         * @var string
         */
        public $name;
        /**
         * The title for this download.
         * @var string 
         */
        public $title;
        /**
         * The description for this download.
         * @var string 
         */
        public $desc;
        /**
         * Special information for this download.
         * @var string
         */
        public $info;
        /**
         * Array of filename extensions or pattern to match (i.e. /\.tar\.gz$/).
         * @var string|array
         */
        public $match = null;
        /**
         * Name of latest file.
         * @var string 
         */
        public $latest = "latest.tar.gz";
        /**
         * The download link format.
         * @var string 
         */
        public $format = '%2$s/%3$s';
        /**
         * The security files to detect.
         * @var array 
         */
        public $detect = array("md5", "sha1", "sha256");
        /**
         * How to sort files.
         * @var string 
         */
        public $sort = self::SORT_NAME;
        /**
         * The files in download directory.
         * @var array 
         */
        private $_files;
        /**
         * The number of instances.
         * @var int 
         */
        private static $_instances = 0;
        /**
         * Number of instances rendered.
         * @var int 
         */
        private static $_rendered = 0;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct("download", $path);
                $this->id = sprintf("download-%s", md5(time() + self::$_instances++));
        }

        public function __get($name)
        {
                return $this->getFiles($name);
        }

        public function render($transform = false)
        {
                parent::render($transform);
                self::$_rendered++;
        }

        /**
         * Get download files.
         * @param string $section The optional section (first or older).
         * @return array
         */
        public function getFiles($section = null)
        {
                if (!isset($this->_files)) {
                        $this->setFiles();
                }

                switch ($section) {
                        case 'files':
                                return $this->_files;
                        case 'first':
                                return $this->_files['first'];
                        case 'older':
                                return $this->_files['older'];
                        case 'secure':
                                return $this->_files['secure'];
                        default:
                                return $this->_files;
                }
        }

        /**
         * Set files array.
         * @throws RuntimeException
         */
        private function setFiles()
        {
                if (!file_exists($this->path)) {
                        throw new RuntimeException("The download directory don't exist");
                }

                $this->_files = array(
                        'first'  => false,
                        'older'  => array(),
                        'secure' => array()
                );

                $this->collect();
                $this->sort();

                $this->setFirst();
        }

        /**
         * Collect downloadable files.
         */
        private function collect()
        {
                $iterator = new FilesystemIterator($this->path);

                foreach ($iterator as $fileinfo) {
                        if ($fileinfo->isDir() ||
                            $fileinfo->isReadable() == false) {
                                continue;
                        }

                        if (is_null($this->match)) {
                                $this->addEntry($fileinfo);
                        } elseif (is_string($this->match) &&
                            preg_match($this->match, $iterator->getBasename())) {
                                $this->addEntry($fileinfo);
                        } elseif (is_array($this->match) &&
                            in_array($iterator->getExtension(), $this->match)) {
                                $this->addEntry($fileinfo);
                        }
                }
        }

        /**
         * Sort downloadable files.
         */
        private function sort()
        {
                switch ($this->sort) {
                        case self::SORT_NAME:
                        case self::SORT_TIME:
                                uasort($this->_files['older'], function($a, $b) {
                                        return strnatcmp($b[$this->sort], $a[$this->sort]);
                                });
                                break;
                        case self::SORT_SIZE:
                        case self::SORT_UNIX:
                                uasort($this->_files['older'], function($a, $b) {
                                        return $b[$this->sort] - $a[$this->sort];
                                });
                                break;
                        default:
                                throw new RuntimeException("Unsupported sort mode $this->sort");
                }
        }

        /**
         * Set primary target.
         */
        private function setFirst()
        {
                if (!$this->_files['first']) {
                        $this->_files['first'] = current($this->_files['older']);
                }
                if ($this->_files['first']['name'] == current($this->_files['older'])['name']) {
                        array_shift($this->_files['older']);
                }
        }

        /**
         * Add file entry.
         * @param SplFileInfo $fileinfo The file info object.
         */
        private function addEntry($fileinfo)
        {
                if ($fileinfo->isLink()) {
                        $this->addLink($fileinfo);
                } elseif ($fileinfo->isFile()) {
                        $this->addFile($fileinfo);
                }
                if ($this->hasSecurity($fileinfo)) {
                        $this->addSecurity($fileinfo);
                }
        }

        /**
         * Add standard file.
         * @param SplFileInfo $fileinfo The file info object.
         */
        private function addFile($fileinfo)
        {
                $this->_files['older'][] = array(
                        'name' => $fileinfo->getFilename(),
                        'size' => $fileinfo->getSize(),
                        'time' => strftime("%x %X", filemtime($fileinfo->getRealPath())),
                        'unix' => filemtime($fileinfo->getRealPath()),
                        'path' => sprintf($this->format, $this->id, $this->path, $fileinfo->getFilename())
                );
        }

        /**
         * Add symbolic link.
         * @param SplFileInfo $fileinfo The file info object.
         */
        private function addLink($fileinfo)
        {
                if ($fileinfo->getFilename() != $this->latest) {
                        return;
                }
                $this->_files['first'] = array(
                        'name' => $fileinfo->getLinkTarget(),
                        'size' => $fileinfo->getSize(),
                        'time' => strftime("%x %X", filemtime($fileinfo->getRealPath())),
                        'unix' => filemtime($fileinfo->getRealPath()),
                        'path' => sprintf($this->format, $this->id, $this->path, $fileinfo->getFilename())
                );
        }

        /**
         * Check if security files exists.
         * 
         * Returns true if checksum or signed files exist for current download file.
         * @param SplFileInfo $fileinfo The file info object. 
         * @return bool 
         */
        private function hasSecurity($fileinfo)
        {
                if (empty($this->detect)) {
                        return false;
                }

                foreach ($this->detect as $secure) {
                        $filename = sprintf("%s/%s.%s", $this->path, $fileinfo->getFilename(), $secure);
                        if (file_exists($filename)) {
                                return true;
                        }
                }

                return false;
        }

        /**
         * Add security files.
         * @param SplFileInfo $fileinfo The file info object. 
         */
        private function addSecurity($fileinfo)
        {
                $this->_files['secure'][$fileinfo->getFilename()] = array();

                foreach ($this->detect as $secure) {
                        $filename = sprintf("%s/%s.%s", $this->path, $fileinfo->getFilename(), $secure);
                        if (file_exists($filename)) {
                                $this->_files['secure'][$fileinfo->getFilename()][$secure] = $filename;
                        }
                }
        }

        /**
         * Should script/style be initialized?
         * @return boolean
         */
        public function initialize()
        {
                return self::$_rendered == 0;
        }

}
