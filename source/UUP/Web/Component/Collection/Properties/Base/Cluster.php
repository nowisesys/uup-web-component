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

use DomainException;
use UUP\Web\Component\Collection\Properties;

/**
 * Clustered properties collection.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Cluster
{

        /**
         * The shadowed properties collection.
         * @var Properties 
         */
        private $_props;

        /**
         * Constructor.
         * @param Properties $props The shadowed properties collection.
         */
        public function __construct($props)
        {
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
                return $this->_props->get($name);
        }

        /**
         * Set property value.
         * @param string $name The property name.
         * @param string|bool $value The property value.
         * @throws DomainException
         */
        public function set($name, $value)
        {
                if (!is_string($value) && !is_bool($value) && !is_null($value)) {
                        throw new DomainException("Unexpected property value");
                }

                $this->_props->set($name, $value);
        }

}
