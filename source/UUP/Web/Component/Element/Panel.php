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

namespace UUP\Web\Component\Element;

use UUP\Web\Component\Element;

/**
 * Panel component.
 *
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 */
class Panel extends Element
{

        /**
         * Constructor.
         * 
         * @param string $text The panel text.
         * @param array $attr Optional attributes.
         * @param string $name The element type.
         */
        public function __construct($text = '', $attr = array(), $name = 'div')
        {
                parent::__construct($attr, $name, $text);
                $this->class->add('w3-panel');
        }

}
