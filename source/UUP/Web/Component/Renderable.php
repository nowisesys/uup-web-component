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

namespace UUP\Web\Component;

use UUP\Web\Component\Transform\Paragon;

/**
 * Abstract base class for concrete component classes.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
abstract class Renderable implements Component
{

        /**
         * The collection of child components.
         * @var array 
         */
        protected $_comp = array();
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
         * Add child component.
         * @param Component $component The child component.
         */
        public function add(Component $component)
        {
                $this->_comp[] = $component;
        }

        /**
         * Get child components.
         * @return Component[]
         */
        public function children()
        {
                return $this->_comp;
        }

        /**
         * Get number of child components.
         * @return int
         */
        public function count()
        {
                return count($this->_comp);
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
                        throw new \RuntimeException("Called without transformer");
                }
                foreach ($this->_comp as $component) {
                        $component->render($transform);
                }
        }

        public function setTransformer($transform)
        {
                $this->_transform = $transform;
        }

}
