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
 * The navigator gallery presentation.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Navigator extends Container
{

        /**
         * Unique ID for this navigator.
         * @var string 
         */
        public $id;
        /**
         * The container style.
         * @var string 
         */
        public $style = "max-width: 500px";
        /**
         * The number of instances.
         * @var int 
         */
        private static $instances = 0;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct("gallery/navigator", $path);
                $this->id = sprintf("gallery-navigator-%s", md5(time() + self::$instances++));
        }

        /**
         * Should template be initialized?
         * @return boolean
         */
        public function initialize()
        {
                return self::$instances == 1;
        }

}
