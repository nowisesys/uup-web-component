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

namespace UUP\Web\Component\Transform;

use UUP\Web\Component\Component;
use UUP\Web\Component\Element;
use UUP\Web\Component\Transform;

/**
 * The native transformer.
 * 
 * This is the native generic properties transformer. It basically output all
 * properties "as is", possibly prefixed.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Native extends Transform
{

        /**
         * The optional prefix.
         * @var string|boolean 
         */
        private $_prefix;

        /**
         * Constructor.
         * @param string $prefix The optional prefix.
         */
        public function __construct($prefix = false)
        {
                $this->_prefix = $prefix;
        }

        /**
         * Transform component.
         * @param Element $component The element component to render.
         * @return int
         */
        public function apply($component, $type)
        {
                if ($type == Component::ELEMENT) {
                        foreach ($component->props as $key => $val) {
                                $this->insert($component, $key, $val);
                        }
                }
        }

        /**
         * Insert class property.
         * 
         * @param Element $component The element component to render.
         * @param string $key The property key.
         * @param string|bool $val The property value.
         */
        private function insert($component, $key, $val)
        {
                if ($this->_prefix) {
                        if (is_bool($val) && $val != false) {
                                $component->class->set(sprintf("%s-%s", $this->_prefix, $key));
                        } else {
                                $component->class->set(sprintf("%s-%s-%s", $this->_prefix, $key, $val));
                        }
                } else {
                        if (is_bool($val) && $val != false) {
                                $component->class->set(sprintf("%s", $key));
                        } else {
                                $component->class->set(sprintf("%s-%s", $key, $val));
                        }
                }
        }

}
