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

namespace UUP\Web\Component\Collection\Attributes;

use UUP\Web\Component\Collection\Attributes;

/**
 * Virtual attributes collection.
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
abstract class VirtualCollection
{

        /**
         * The attributes collection.
         * @var Attributes 
         */
        private $_attrs;

        /**
         * Constructor.
         * @param Attributes $attrs The attributes collection.
         */
        public function __construct($attrs)
        {
                $this->_attrs = $attrs;
        }

        public function __get($name)
        {
                return $this->_attrs->get($name);
        }

        public function __set($name, $value)
        {
                $this->_attrs->set($name, $value);
        }

}
