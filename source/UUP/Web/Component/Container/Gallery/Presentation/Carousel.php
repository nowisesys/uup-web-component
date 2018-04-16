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

/**
 * The carousel gallery presentation.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Carousel extends Container
{

        /**
         * Unique ID for this carousel.
         * @var string 
         */
        public $id;
        /**
         * The height.
         * @var string 
         */
        public $height = "320px";
        /**
         * The width.
         * @var string 
         */
        public $width = "100%";
        /**
         * The interval in seconds between shifting pictures.
         * @var int 
         */
        public $interval = 10;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct("gallery/carousel", $path);
                $this->id = sprintf("carousel-%s", md5($this->path));
        }

}
