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

namespace UUP\Web\Component\Collection\Base;

use DomainException;
use UUP\Web\Component\Collection\Collection;

/**
 * Prefixed attribute collection.
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class PrefixedAttributeCollection extends AttributeCollection
{

        /**
         * The prefix string (i.e. color).
         * @var string 
         */
        private $_prefix;

        /**
         * Constructor.
         * @param string $prefix The prefix string (i.e. color).
         * @param Collection $props The shadowed collection.
         */
        public function __construct($prefix, $props)
        {
                $this->_prefix = $prefix;
                parent::__construct($props);
        }

        public function __get($name)
        {
                return $this->get($name);
        }

        public function __set($name, $value)
        {
                $this->set($name, $value);
        }

        /**
         * Get property value.
         * @param string $name The property name.
         * @return bool|string
         */
        public function get($name)
        {
                return parent::get(sprintf("%s-%s", $this->_prefix, $name));
        }

        /**
         * Set property value.
         * @param string $name The property name.
         * @param string|bool $value The property value.
         * @throws DomainException
         */
        public function set($name, $value = null)
        {
                parent::set(sprintf("%s-%s", $this->_prefix, $name), $value);
        }

}
