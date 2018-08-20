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

/**
 * Abstract base class rendition transformators.
 * 
 * Users of this library can derive from this class and implement the apply() 
 * method to hook into the render pipe-line. The class is designed to be used 
 * as callable (like functional classes i C++).
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
abstract class Transform
{

        /**
         * Nothing has been rendered.
         */
        const RENDER_NONE = 0;
        /**
         * The complete rendering is done.
         */
        const RENDER_DONE = 1;
        /**
         * Continue render children.
         */
        const RENDER_CHILDREN = 2;

        /**
         * The shared transform object.
         * @var Transform 
         */
        private static $_instance;

        /**
         * Invokes the apply method.
         * 
         * @param Component $component The component to render.
         * @param int $type The component type (one of the Component::XXX constants).
         * @return boolean
         */
        public function __invoke($component, $type)
        {
                return $this->apply($component, $type);
        }

        /**
         * Implement this method to handle transformation.
         * 
         * This method should return one of the RENDER_XXX constants to signal
         * whether the component has been completely rendered (RENDER_DONE), if
         * nothing has been rendered (RENDER_NONE) or if caller should continue
         * render child components (RENDER_CHILDREN).
         * 
         * 1. One case is that the transformer either renders the component including 
         *    any child components and returns RENDER_DONE. 
         * 
         * 2. Another case is that this transformer is just transforming properties, in 
         *    which case returning RENDER_NONE is appropriate. 
         * 
         * 3. The last case is for a transformer that is rendering the top component
         *    but leave rendering of children. In this case return RENDER_CHILDREN.
         * 
         * If nothing is returned, then the caller should perform the same behavior 
         * as if RENDER_NONE was returned.
         * 
         * @param Component $component The component to render.
         * @param int $type The component type (one of the Component::XXX constants).
         * @return int
         */
        public abstract function apply($component, $type);

        /**
         * Get default transformer.
         * @return Transform
         */
        public static function getInstance()
        {
                if (isset(self::$_instance)) {
                        return self::$_instance;
                } else {
                        return self::$_instance = new Transform\Paragon();
                }
        }

        /**
         * Set default transformer.
         * @param Transform $transform The transform object.
         */
        public static function setInstance($transform)
        {
                self::$_instance = $transform;
        }

}
