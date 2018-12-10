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

namespace UUP\Web\Component\Collection\Base;

/**
 * Repository of attribute collections.
 * 
 * The purpose of this class is to support lazy initialization of clustered or 
 * prefixed collection. Getting the name of an not yet created colletion will 
 * instatiate that collection if it's known to this class.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
abstract class CollectionRepository
{

        /**
         * The array of property collections.
         * @var AttributeCollection 
         */
        private $_repos = array();

        /**
         * Get property collection.
         * @param string $name The property collection name.
         * @return ClusterAttributeCollection
         */
        public function get($name)
        {
                if (isset($this->_repos[$name])) {
                        return $this->_repos[$name];
                } else {
                        return $this->insert($name);
                }
        }

        /**
         * Check if property collection exists.
         * @param string $name The property collection name.
         * @return bool
         */
        public function has($name)
        {
                return isset($this->_repos[$name]);
        }

        private function insert($name)
        {
                return $this->_repos[$name] = $this->create($name);
        }

        /**
         * Get property collection.
         * The object will be created if its handled by this repository.
         * 
         * @param string $name The property collection name.
         * @return boolean|AttributeCollection
         */
        abstract protected function create($name);
}
