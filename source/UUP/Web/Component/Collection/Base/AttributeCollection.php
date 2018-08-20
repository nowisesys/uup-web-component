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

use DomainException;
use UUP\Web\Component\Collection\Collection;

/**
 * Base class for attribute collections.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
abstract class AttributeCollection
{

        /**
         * The shadowed collection.
         * @var Collection 
         */
        private $_props;

        /**
         * Constructor.
         * @param Collection $props The shadowed collection.
         */
        public function __construct($props)
        {
                $this->_props = $props;
        }

        /**
         * Get property value.
         * @param string $name The property name.
         * @return bool|string
         */
        protected function get($name)
        {
                return $this->_props->get(str_replace('-', '_', $name));
        }

        /**
         * Set property value.
         * @param string $name The property name.
         * @param string|bool $value The property value.
         * @throws DomainException
         */
        protected function set($name, $value = null)
        {
                if ($this->acceptable($value) == false) {
                        throw new DomainException("Unexpected property value");
                }

                $this->_props->set(str_replace('_', '-', $name), $value);
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
