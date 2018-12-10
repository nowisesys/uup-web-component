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

namespace UUP\Web\Component\Collection\Properties\Base;

use UUP\Web\Component\Collection\Base\ClusterAttributeCollection;
use UUP\Web\Component\Collection\Base\CollectionRepository;
use UUP\Web\Component\Collection\Properties;

/**
 * Properties collection repository.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Repository extends CollectionRepository
{

        /**
         * The properties collection.
         * @var Properties 
         */
        private $_props;

        /**
         * Constructor.
         * @param Properties $props The properties collection.
         */
        public function __construct($props)
        {
                $this->_props = $props;
        }

        /**
         * Get sub collection object.
         * Return sub collection object if handled by this class or false.
         * 
         * @param string $name The property collection name.
         * @return boolean|ClusterAttributeCollection|Prefix
         */
        protected function create($name)
        {
                switch ($name) {
                        case 'card':
                                return new Properties\Card($this->_props);
                        case 'color':
                                return new Properties\Color($this->_props);
                        case 'container':
                                return new Properties\Container($this->_props);
                        case 'display':
                                return new Properties\Display($this->_props);
                        case 'effect':
                                return new Properties\Effect($this->_props);
                        case 'hover':
                                return new Properties\Hover($this->_props);
                        case 'padding':
                                return new Properties\Padding($this->_props);
                        case 'round':
                                return new Properties\Round($this->_props);
                        default:
                                return false;
                }
        }

}
