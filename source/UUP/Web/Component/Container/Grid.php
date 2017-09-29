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

namespace UUP\Web\Component\Container;

use UUP\Web\Component\Container;

/**
 * Grid component.
 * 
 * The image is an URL and icon is the name of an font awesome icon.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Grid extends Container
{

        public $title = "TITLE";
        public $intro = "INTRO";
        public $text = "TEXT";
        public $icon = false;
        public $image = false;
        public $color = "white";
        public $align = "left";

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct('grid', $path);
        }

}
