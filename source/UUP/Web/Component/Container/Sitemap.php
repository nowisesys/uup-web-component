<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Nowise Systems).
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

use UUP\Web\Component\Container;
use UUP\Web\Component\Container\Sitemap\Directory;
use UUP\Web\Component\Container\Sitemap\TreeNode;

/**
 * Site map container.
 * 
 * Create a graph of content that shows the site content to remote peer and
 * provides them with an easy interface for navigation. The site map can be
 * filtered.
 * 
 * Each node in the tree represents a directory. Nodes can be toggled to show
 * or hide its children nodes. The complete tree is always output, but uses 
 * javascript to hide nodes.
 * 
 * Not all directories should appear in the tree. Use the exclude filter to
 * discard some directories based on name (can be multiple) or content within
 * the directory (the file section). For example, the default configuration
 * excludes directories containing hide-files (named .hidden) or directories 
 * named admin.
 * 
 * @property string $root The root directory.
 * @property string $name The root node name.
 * @property string $path The server path (location).
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Sitemap extends Container implements TreeNode
{

        /**
         * The default name for root.
         */
        const NODE_DEFAULT_NAME = 'root';
        /**
         * The default root directory.
         */
        const NODE_DEFAULT_ROOT = '/var/www/localhost/htdocs';
        /**
         * The default path (location).
         */
        const NODE_DEFAULT_PATH = '/';
        /**
         * Sort on filename.
         */
        const SORT_ON_NAME = 'name';
        /**
         * Sort on modified timestamp.
         */
        const SORT_ON_TIME = 'time';
        /**
         * Order ascending.
         */
        const ORDER_ASC = 'asc';
        /**
         * Order descending.
         */
        const ORDER_DESC = 'desc';

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
         * Sort directory listing (bool or 'name'|'time').
         * @var bool|string
         */
        public $sort = false;
        /**
         * The sort order.
         * @var string 
         */
        public $order = self::ORDER_ASC;
        /**
         * The directory node.
         * @var Directory 
         */
        private $_directory;
        /**
         * The root directory.
         * @var string 
         */
        private $_root = self::NODE_DEFAULT_ROOT;
        /**
         * The URI location.
         * @var string 
         */
        private $_path = self::NODE_DEFAULT_PATH;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct('sitemap', $path);
                $this->_directory = new Directory($this, self::NODE_DEFAULT_NAME);

                if (filter_has_var(INPUT_SERVER, 'DOCUMENT_ROOT')) {
                        $this->root = filter_input(INPUT_SERVER, 'DOCUMENT_ROOT');
                }

                if (filter_has_var(INPUT_SERVER, 'SERVER_NAME')) {
                        $this->name = filter_input(INPUT_SERVER, 'SERVER_NAME');
                }
        }

        public function __get($name)
        {
                switch ($name) {
                        case 'name':
                                return $this->_directory->getName();
                        case 'path':
                                return $this->_path;
                        case 'root':
                                return $this->_root;
                }
        }

        public function __set($name, $value)
        {
                switch ($name) {
                        case 'name':
                                $this->_directory->setName($value);
                                break;
                        case 'path':
                                $this->_path = $value;
                                break;
                        case 'root':
                                $this->_root = $value;
                                break;
                }
        }

        /**
         * Set exclude filter.
         * 
         * <code>
         * $sitemap->setFilter(array(
         *      'name' => array('admin'),
         *      'file' => array('.hidden')
         * );
         * </code>
         * 
         * @param array $exclude The filter options.
         */
        public function setFilter($exclude)
        {
                $this->exclude = $exclude;
        }

        /**
         * Add exclude filter.
         * 
         * <code>
         * // 
         * // Exclude directories named .config (user settings).
         * // 
         * $sitemap->addFilter('name', '.config');
         * 
         * // 
         * // Don't show directories containing .noshow files.
         * // 
         * $sitemap->addFilter('type', '.noshow');
         * </code>
         * 
         * @param string $type The type (name or file).
         * @param string $name The exclude value.
         */
        public function addFilter($type, $name)
        {
                $this->exclude[$type][] = $name;
        }

        /**
         * Get children tree nodes.
         * @return TreeNode[] 
         */
        public function getChildren()
        {
                return $this->_directory->getChildren();
        }

        /**
         * Get name of tree node.
         * @return string 
         */
        public function getName()
        {
                return $this->_directory->getName();
        }

        /**
         * Get path of tree node.
         * @return string 
         */
        public function getPath()
        {
                return $this->_path;
        }

        /**
         * This tree node has children.
         * @return bool 
         */
        public function hasChildren()
        {
                return $this->_directory->hasChildren();
        }

        /**
         * This tree node can be displayed.
         * @return bool 
         */
        public function isDisplayable()
        {
                return $this->_directory->isDisplayable();
        }

        /**
         * Get nesting level.
         * @return int
         */
        public function getLevel()
        {
                return 0;
        }

        /**
         * Get unique ID.
         * @return string
         */
        public function getID()
        {
                return $this->_directory->getID();
        }

        /**
         * Get URI location.
         * 
         * The returned location is identical with the sitemap path. Unless set this
         * will be '/'.
         * 
         * @return string
         */
        public function getLocation()
        {
                return $this->_path;
        }

}
