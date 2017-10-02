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
 * The default transformer.
 *
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 */
class Paragon extends Transform
{

        /**
         * Transform component.
         * 
         * Return true if this method has rendered the component. The caller will
         * not try to render itself in this case.
         * 
         * @param Component $component The component to render.
         * @param int $type The component type (one of the Component::XXX constants).
         * @return boolean
         */
        public function apply($component, $type)
        {
                if ($type == Component::ELEMENT) {
                        $this->transform($component);
                }
        }

        /**
         * Transform component.
         * @param Element $component The element component to render.
         */
        private function transform($component)
        {
                foreach ($component->props as $key => $val) {
                        if (($class = $this->remap($key, $val))) {
                                $component->class->add($class);
                        }
                }
        }

        /**
         * Return w3-xxx class mapped by key/val pair.
         * 
         * @param string $key The generic key name.
         * @param string $val The generic key value.
         * @return string
         */
        private function remap($key, $val)
        {
                switch ($key) {
                        case 'color-back':
                                return "w3-$val";
                        case 'color-text':
                                return "w3-text-$val";
                        case 'hover-back':
                                return "w3-hover-$val";
                        case 'hover-text':
                                return "w3-hover-text-$val";
                        case 'hover-border':
                                return "w3-hover-border-$val";
                        default:
                                if (is_bool($val) && $val != false) {
                                        return "w3-$key";
                                }
                }
        }

}
