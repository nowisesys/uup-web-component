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

use UUP\Web\Component\Collection\Base\ClusterAttributeCollection;
use UUP\Web\Component\Collection\Base\CollectionRepository;
use UUP\Web\Component\Collection\Properties;
use UUP\Web\Component\Collection\Properties\Card;
use UUP\Web\Component\Collection\Properties\Color;
use UUP\Web\Component\Collection\Properties\Container;
use UUP\Web\Component\Collection\Properties\Display;
use UUP\Web\Component\Collection\Properties\Effect;
use UUP\Web\Component\Collection\Properties\Hover;
use UUP\Web\Component\Collection\Properties\Padding;

/**
 * Properties collection repository.
 *
 * @author Anders Lövgren (QNET)
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
                                return new Card($this->_props);
                        case 'color':
                                return new Color($this->_props);
                        case 'container':
                                return new Container($this->_props);
                        case 'display':
                                return new Display($this->_props);
                        case 'effect':
                                return new Effect($this->_props);
                        case 'hover':
                                return new Hover($this->_props);
                        case 'padding':
                                return new Padding($this->_props);
                        default:
                                return false;
                }
        }

}
