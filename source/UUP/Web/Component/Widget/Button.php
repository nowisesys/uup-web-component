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

namespace UUP\Web\Component\Widget;

use UUP\Web\Component\Collection\Properties\Color;
use UUP\Web\Component\Collection\Properties\Hover;
use UUP\Web\Component\Element\Button as ButtonBase;

/**
 * Button widget component.
 * 
 * @property-write string $link The target URL.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Button extends ButtonBase
{

        /**
         * The button color properties.
         * @var Color 
         */
        public $color;
        /**
         * The button hover properties.
         * @var Hover 
         */
        public $hover;

        /**
         * Constructor.
         * @param string $text The button text.
         */
        public function __construct($text = '')
        {
                parent::__construct($text);

                $this->color = $this->props->color;
                $this->hover = $this->props->hover;
        }

        public function __set($name, $value)
        {
                switch ($name) {
                        case 'link':
                                $this->attr->common->href = $value;
                                $this->setName('a');    // transform to anchor element
                                break;
                        default:
                                parent::__set($name, $value);
                }
        }

}
