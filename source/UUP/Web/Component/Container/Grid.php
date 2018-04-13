<?php

/*
 * Copyright (C) 2017-2018 Anders Lövgren (QNET).
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
 * Renders two column content with image|text or text|image. Use either
 * icon or image. The icon name is font awesome without 'fa-' prefix.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Grid extends Container
{

        /**
         * The grid header text.
         * @var string 
         */
        public $title = false;
        /**
         * A short ingress text.
         * @var string 
         */
        public $intro = false;
        /**
         * The grid content (plain text or HTML).
         * @var string 
         */
        public $text = false;
        /**
         * The icon name (i.e. anchor).
         * @var string 
         */
        public $icon = false;
        /**
         * The image URL.
         * @var string 
         */
        public $image = false;
        /**
         * The background color.
         * @var string 
         */
        public $color = "white";
        /**
         * The content alignment (left or right).
         * @var string 
         */
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
