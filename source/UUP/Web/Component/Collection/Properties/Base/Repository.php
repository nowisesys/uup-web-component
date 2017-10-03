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

namespace UUP\Web\Component\Collection\Properties\Base;

use UUP\Web\Component\Collection\Properties;
use UUP\Web\Component\Collection\Properties\Container;
use UUP\Web\Component\Collection\Properties\Effect;

/**
 * Properties collection repository.
 * 
 * The purpose of this class is to support lazy initialization of clustered or 
 * prefixed property collection. Getting the name of an not yet created colletion
 * will instatiate that collection if it's known to this class.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Repository
{

        /**
         * The properties collection.
         * @var Properties 
         */
        private $_props;
        /**
         * The array of cluster property objects.
         * @var Cluster 
         */
        private $_repos = array();

        /**
         * Constructor.
         * @param Properties $props The properties collection.
         */
        public function __construct($props)
        {
                $this->_props = $props;
        }

        /**
         * Get cluster property collection.
         * @param string $name The property collection name.
         * @return Cluster
         */
        public function get($name)
        {
                if (isset($this->_repos[$name])) {
                        return $this->_repos[$name];
                } else {
                        return $this->create($name);
                }
        }

        /**
         * Check if cluster property collection exists.
         * @param string $name The property collection name.
         * @return bool
         */
        public function has($name)
        {
                return isset($this->_repos[$name]);
        }

        /**
         * Get cluster property object.
         * 
         * The object will be created if its handled by this class.
         * @param string $name The property collection name.
         * @return boolean|Cluster
         */
        private function create($name)
        {
                switch ($name) {
                        case 'container':
                                return $this->_repos[$name] = new Container($this->_props);
                        case 'effect':
                                return $this->_repos[$name] = new Effect($this->_props);
                        default:
                                return false;
                }
        }

}
