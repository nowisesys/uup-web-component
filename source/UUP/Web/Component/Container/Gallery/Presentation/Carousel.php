<?php

/*
 * Copyright (C) 2018 Anders Lövgren (Nowise Systems).
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

namespace UUP\Web\Component\Container\Gallery\Presentation;

use UUP\Web\Component\Container;
use UUP\Web\Component\Container\Gallery\Presentation;

/**
 * The carousel gallery presentation.
 * 
 * Layout is picky due to template rendering child components using absolute
 * position. Please adjust style property to match.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Carousel extends Container implements Presentation
{

        /**
         * Unique ID for this carousel.
         * @var string 
         */
        public $id;
        /**
         * The container style.
         * @var string 
         */
        public $style = "max-width: 500px; height: 400px; z-index: 0";
        /**
         * The interval in seconds between shifting pictures.
         * @var int 
         */
        public $interval = 10;
        /**
         * Number of seconds for cross fading.
         * @var int 
         */
        public $duration = 2;
        /**
         * The number of instances.
         * @var int 
         */
        private static $_instances = 0;
        /**
         * Number of instances rendered.
         * @var int 
         */
        private static $_rendered = 0;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct("gallery/carousel", $path);
                $this->id = sprintf("gallery-carousel-%s", md5(time() + self::$_instances++));
        }

        public function render($transform = false)
        {
                parent::render($transform);
                self::$_rendered++;
        }

        /**
         * Should script be initialized?
         * @return boolean
         */
        public function initialize()
        {
                return self::$_rendered == 0;
        }

}
