<?php

/*
 * Copyright (C) 2017-2018 Anders Lövgren (Nowise Systems).
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
 * Cell component.
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Cell extends Container
{

        /**
         * The cell title.
         * @var string 
         */
        public $title = false;
        /**
         * The cell text.
         * @var string 
         */
        public $text = false;
        /**
         * The image URL.
         * @var string 
         */
        public $image = "https://secure.bankofamerica.com/content/images/ContextualSiteGraphics/Instructional/en_US/Banner_Credit_Card_Activation.png";
        /**
         * Background color.
         * @var string 
         */
        public $color = "w3-white";
        /**
         * The target URL.
         * @var string 
         */
        public $href = "#";
        /**
         * The inner padding.
         * @var string 
         */
        public $padding = "w3-padding-16";

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct('cell', $path);
        }

        public static function create($data = array('image' => '', 'title' => '', 'text' => '', 'href' => '#'))
        {
                $component = new Cell();

                foreach ($data as $key => $val) {
                        $component->$key = $val;
                }

                return $component;
        }

}
