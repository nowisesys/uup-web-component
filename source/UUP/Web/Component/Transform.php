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

/**
 * Abstract base class rendition transformators.
 * 
 * Users of this library can derive from this class and implement the apply() 
 * method to hook into the render pipe-line. The class is designed to be used 
 * as callable (like functional classes i C++).
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
abstract class Transform
{

        /**
         * Invokes the apply method.
         * 
         * @param int $type The component type (one of the Component::XXX constants).
         * @param Component $component The component to render.
         * @return boolean
         */
        public function __invoke($type, $component)
        {
                return $this->apply($type, $component);
        }

        /**
         * Implement this method to handle transformation.
         * 
         * Return true if this method has rendered the component. The caller will
         * not try to render itself in this case.
         * 
         * @param Component $component The component to render.
         * @param int $type The component type (one of the Component::XXX constants).
         * @return boolean
         */
        public abstract function apply($component, $type);
}
