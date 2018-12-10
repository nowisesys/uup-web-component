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
 * The bootstrap transformer.
 * 
 * This transformer translates properties to class names for use with the
 * twitter bootstrap CSS/JS theme.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Bootstrap extends Transform
{

        /**
         * Transform component.
         * 
         * @param Component $component The component to render.
         * @param int $type The component type (one of the Component::XXX constants).
         * @return int
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
         * Return bootstrap class mapped by key/val pair.
         * 
         * @param string $key The generic key name.
         * @param string $val The generic key value.
         * @return string
         */
        private function remap($key, $val)
        {
                $attrmap = array(
                        'color-back' => array(
                                'white'  => 'btn-default',
                                'indigo' => 'btn-primary',
                                'green'  => 'btn-success',
                                'blue'   => 'btn-info',
                                'yellow' => 'btn-warning',
                                'red'    => 'btn-danger'
                        ),
                        'color-text' => array(
                                'blue' => 'btn-link'
                        )
                );

                if (isset($attrmap[$key][$val])) {
                        return $attrmap[$key][$val];
                } else {
                        return $key;
                }
        }

}
