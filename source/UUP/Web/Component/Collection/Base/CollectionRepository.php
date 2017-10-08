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

namespace UUP\Web\Component\Collection\Base;

/**
 * Properties collection repository.
 * 
 * The purpose of this class is to support lazy initialization of clustered or 
 * prefixed collection. Getting the name of an not yet created colletion will 
 * instatiate that collection if it's known to this class.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
abstract class CollectionRepository
{

        /**
         * The array of cluster property objects.
         * @var ClusterAttributeCollection 
         */
        private $_repos = array();

        /**
         * Get cluster property collection.
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
         * Check if cluster property collection exists.
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
         * Get cluster property object.
         * 
         * The object will be created if its handled by this class.
         * @param string $name The property collection name.
         * @return boolean|ClusterAttributeCollection|Prefix
         */
        abstract protected function create($name);
}
