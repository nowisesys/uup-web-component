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

namespace UUP\Web\Component;

use RuntimeException;

/**
 * Abstract base class for concrete component classes.
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
abstract class Renderable implements Component
{

        /**
         * The collection of child components.
         * @var array 
         */
        protected $_components = array();
        /**
         * The transformer object.
         * @var Transform 
         */
        protected $_transform;

        /**
         * Constructor.
         */
        protected function __construct()
        {
                $this->_transform = Transform::getInstance();
        }

        /**
         * Set child component.
         * 
         * Calling this method clears the list of existing child components first
         * before adding this new child component.
         * 
         * @param Component $component The child component.
         */
        function setComponent(Component $component)
        {
                $this->_components = array();
                $this->_components[] = $component;
        }

        /**
         * Add child component.
         * @param Component $component The child component.
         */
        public function addComponent(Component $component)
        {
                $this->_components[] = $component;
        }

        /**
         * Get component at position index.
         * @param int $index
         * @return Component
         */
        public function getComponent($index)
        {
                return $this->_components[$index];
        }

        /**
         * Get child components.
         * @return Component[]
         */
        public function getComponents()
        {
                return $this->_components;
        }

        /**
         * Child components check.
         * @return bool True if this component has child components.
         */
        public function hasComponents()
        {
                return count($this->_components) != 0;
        }

        /**
         * Get number of child components.
         * @return int
         */
        public function componentCount()
        {
                return count($this->_components);
        }

        /**
         * Render component.
         * 
         * The transform argument is a callback. The component (about to be
         * rendered) is passed to transform that has the option to modify the
         * style and classes.
         * 
         * @param callable|Transform $transform The render transform callable.
         */
        public function render($transform = false)
        {
                if (!$transform) {
                        $transform = $this->_transform;
                }
                foreach ($this->_components as $component) {
                        $component->render($transform);
                }
        }

        public function setTransformer($transform)
        {
                $this->_transform = $transform;
        }

}
