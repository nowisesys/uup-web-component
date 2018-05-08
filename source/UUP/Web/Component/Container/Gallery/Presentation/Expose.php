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
 * The exposé gallery presentation.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Expose extends Container implements Presentation
{

        /**
         * The item layout (half, third, quarter, single or auto).
         * @var string 
         */
        public $layout = 'auto';
        /**
         * Use flat style or card outline.
         * @var boolean 
         */
        public $flat = null;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct("gallery/expose", $path);
        }

}
