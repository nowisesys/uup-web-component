<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Computing Department at BMC, Uppsala University).
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

namespace UUP\Web\Component\Container\Sitemap;

use DirectoryIterator;
use FilesystemIterator;
use UUP\Web\Component\Container\Sitemap;

/**
 * Directory tree node.
 *
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 */
class Directory implements TreeNode
{

        /**
         * The site map object.
         * @var Sitemap 
         */
        private $_sitemap;
        /**
         * The node name.
         * @var string 
         */
        private $_name;
        /**
         * The node path.
         * @var string 
         */
        private $_path;
        /**
         * The child nodes.
         * @var TreeNode[] 
         */
        private $_children;
        /**
         * The nesting level.
         * @var int 
         */
        private $_level;

        /**
         * Constructor.
         * @param Sitemap $sitemap The site map object.
         * @param string $name The node name.
         * @param string $path The node path.
         */
        public function __construct($sitemap, $name, $path, $level = 0)
        {
                $this->_sitemap = $sitemap;

                $this->_name = $name;
                $this->_path = $path;

                $this->_level = $level;
        }

        /**
         * Get node name.
         * @return string
         */
        public function getName()
        {
                return $this->_name;
        }

        /**
         * Get node path.
         * @return string
         */
        public function getPath()
        {
                return $this->_path;
        }

        /**
         * Set node name.
         * @param string $name The node name.
         */
        public function setName($name)
        {
                $this->_name = $name;
        }

        /**
         * Set node path.
         * @param string $path The node path.
         */
        public function setPath($path)
        {
                $this->_path = $path;
        }

        /**
         * Get children tree nodes.
         * @return TreeNode[] 
         */
        public function getChildren()
        {
                if (!isset($this->_children)) {
                        $this->setChildren($this->_sitemap->root);
                }
                return $this->_children;
        }

        /**
         * This tree node has children.
         * @return bool 
         */
        public function hasChildren()
        {
                if (!isset($this->_children)) {
                        $this->setChildren($this->_sitemap->root);
                }
                return count($this->_children) > 0;
        }

        /**
         * This tree node can be displayed.
         * @return bool 
         */
        public function isDisplayable()
        {
                return $this->isHidden() == false && $this->isExcluded() == false;
        }

        /**
         * Check exclude by file.
         * 
         * Returns true if at least one of the exclude files (i.e. .hidden) is present 
         * in current sub directory.
         * 
         * @return boolean
         */
        private function isHidden()
        {
                foreach ($this->_sitemap->exclude['file'] as $file) {
                        if ($this->isExisting($file)) {
                                return true;
                        }
                }

                return false;
        }

        /**
         * Check exclude by name.
         * 
         * Returns true if current directory name matches either one of the names in
         * the exclude list.
         * 
         * @return boolean
         */
        private function isExcluded()
        {
                foreach ($this->_sitemap->exclude['name'] as $name) {
                        if ($this->_name == $name) {
                                return true;
                        }
                }

                return false;
        }

        /**
         * Check if file exist in current directory.
         * 
         * @param string $file The filename.
         * @return boolean
         */
        private function isExisting($file)
        {
                return file_exists(sprintf("%s/%s/%s", $this->_sitemap->root, $this->_path, $file));
        }

        /**
         * Set child node list.
         * 
         * Iterate thru current directory content and add sub directory entries to 
         * the child node list.
         * 
         * @param string $root The root directory.
         */
        private function setChildren($root)
        {
                $iterator = new DirectoryIterator(sprintf("%s%s", $root, $this->_path));
                $this->_children = array();

                foreach ($iterator as $fileinfo) {
                        if ($fileinfo->isDot()) {
                                continue;
                        }
                        if ($fileinfo->isDir()) {
                                $this->addChild($fileinfo);
                        }
                }
        }

        /**
         * Add child node to list.
         * 
         * Check if child node is displayable and add to list.
         * @param FilesystemIterator $fileinfo The file system iterator.
         */
        private function addChild($fileinfo)
        {
                $directory = new Directory($this->_sitemap, $fileinfo->getBasename(), $this->getRelative($fileinfo), $this->_level + 1);

                if ($directory->isDisplayable()) {
                        $this->_children[] = $directory;
                }
        }

        /**
         * Get relative path.
         * 
         * @param FilesystemIterator $fileinfo
         * @return string 
         */
        private function getRelative($fileinfo)
        {
                return substr($fileinfo->getPathname(), strlen($this->_sitemap->root));
        }

        /**
         * Get nesting level.
         * @return int
         */
        public function getLevel()
        {
                return $this->_level;
        }

}
