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
 * Interface for components.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
interface Component
{

        /**
         * Component is an element.
         */
        const ELEMENT = 1;
        /**
         * Component is an container.
         */
        const CONTAINER = 2;

        /**
         * Set child component.
         * 
         * Calling this method clears the list of existing child components first
         * before adding this new child component.
         * 
         * @param Component $component The child component.
         */
        function setComponent(Component $component);

        /**
         * Add child component.
         * @param Component $component The child component.
         */
        function addComponent(Component $component);

        /**
         * Get number of child components.
         * @return int 
         */
        function componentCount();

        /**
         * Get component at position.
         * @param int $index The component position.
         * @return Component
         */
        function getComponent($index);

        /**
         * Get all child components.
         * @return Component[]
         */
        function getComponents();

        /**
         * Child components check.
         * @return bool True if this component has child components.
         */
        function hasComponents();

        /**
         * Render component.
         * 
         * The transform argument is a callback. The component (about to be
         * rendered) is passed to transform that has the option to modify the
         * style and classes.
         * 
         * @param callable|Transform $transform The render transform callable.
         */
        function render($transform = false);

        /**
         * Set transformer.
         * @param Transform $transform The transformer object.
         */
        function setTransformer($transform);
}
