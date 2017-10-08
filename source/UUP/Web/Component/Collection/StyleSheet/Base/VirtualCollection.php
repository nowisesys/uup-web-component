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

namespace UUP\Web\Component\Collection\StyleSheet\Base;

use UUP\Web\Component\Collection\StyleSheet;

/**
 * Virtual attributes collection.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
abstract class VirtualCollection
{

        /**
         * The attributes collection.
         * @var StyleSheet 
         */
        private $_attrs;
        /**
         * The property to attribute name map.
         * @var array 
         */
        private $_remap;
        /**
         * The attribute to property name map.
         * @var array 
         */
        private $_inmap;

        /**
         * Constructor.
         * 
         * @param StyleSheet $attrs The attributes collection.
         * @param array $remap The property to attribute name map.
         */
        public function __construct($attrs, $remap = array())
        {
                $this->_attrs = $attrs;
                $this->_remap = $remap;
                $this->_inmap = array_flip($remap);
        }

        public function __get($name)
        {
                $name = $this->mapped($name, $this->_remap);
                return $this->_attrs->get($name);
        }

        public function __set($name, $value)
        {
                $name = $this->mapped($name, $this->_remap);
                $this->_attrs->set($name, $value);
        }

        private function mapped($name, $remap)
        {
                if (array_key_exists($name, $remap)) {
                        return $remap[$name];
                } else {
                        return $name;
                }
        }

}
