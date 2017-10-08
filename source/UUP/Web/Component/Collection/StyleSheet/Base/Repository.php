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

use UUP\Web\Component\Collection\Base\ClusterAttributeCollection;
use UUP\Web\Component\Collection\Base\CollectionRepository;
use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;
use UUP\Web\Component\Collection\StyleSheet\Align;
use UUP\Web\Component\Collection\StyleSheet\Animation;
use UUP\Web\Component\Collection\StyleSheet\Backface;
use UUP\Web\Component\Collection\StyleSheet\Background;
use UUP\Web\Component\Collection\StyleSheet\Border;
use UUP\Web\Component\Collection\StyleSheet\Box;
use UUP\Web\Component\Collection\StyleSheet\Caption;

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
         * The stylesheet collection.
         * @var StyleSheet 
         */
        private $_props;

        /**
         * Constructor.
         * @param StyleSheet $props The stylesheet collection.
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
         * @return boolean|ClusterAttributeCollection|PrefixedAttributeCollection
         */
        protected function create($name)
        {
                switch ($name) {
                        case 'align':
                                return new Align($this->_props);
                        case 'animation':
                                return new Animation($this->_props);
                        case 'backface':
                                return new Backface($this->_props);
                        case 'background':
                                return new Background($this->_props);
                        case 'border':
                                return new Border($this->_props);
                        case 'box':
                                return new Box($this->_props);
                        case 'caption':
                                return new Caption($this->_props);
                        default:
                                return false;
                }
        }

}
