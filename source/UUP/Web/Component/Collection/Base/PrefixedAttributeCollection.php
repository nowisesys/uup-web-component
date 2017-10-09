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
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class PrefixedAttributeCollection
{

        /**
         * The prefix string (i.e. color).
         * @var string 
         */
        private $_prefix;
        /**
         * The shadowed properties collection.
         * @var Collection 
         */
        private $_props;

        /**
         * Constructor.
         * @param string $prefix The prefix string (i.e. color).
         * @param Collection $props The shadowed collection.
         */
        public function __construct($prefix, $props)
        {
                $this->_prefix = $prefix;
                $this->_props = $props;
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
                return $this->_props->get(sprintf("%s-%s", $this->_prefix, str_replace('-', '_', $name)));
        }

        /**
         * Set property value.
         * @param string $name The property name.
         * @param string|bool $value The property value.
         * @throws DomainException
         */
        public function set($name, $value = null)
        {
                if ($this->acceptable($value) == false) {
                        throw new DomainException("Unexpected property value");
                }
                if (isset($value)) {
                        $this->_props->set(sprintf("%s-%s", $this->_prefix, str_replace('_', '-', $name)), $value);
                } else {
                        $this->_props->set(sprintf("%s", $this->_prefix), str_replace('_', '-', $name));
                }
        }

        /**
         * Check if value is acceptable.
         * @param mixed $value The value to check.
         * @return boolean
         */
        private function acceptable($value)
        {
                if (is_object($value)) {
                        return false;
                } elseif (is_string($value)) {
                        return true;
                } elseif (is_bool($value)) {
                        return true;
                } elseif (is_numeric($value)) {
                        return true;
                } elseif (is_null($value)) {
                        return true;
                } else {
                        return false;
                }
        }

}
