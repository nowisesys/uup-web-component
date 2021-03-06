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
use UUP\Web\Component\Element\Button;

/**
 * Card component.
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Card extends Container
{

        /**
         * Example URL for image.
         */
        const IMAGE = "https://secure.bankofamerica.com/content/images/ContextualSiteGraphics/Instructional/en_US/Banner_Credit_Card_Activation.png";

        /**
         * The card title.
         * @var string 
         */
        public $title = false;
        /**
         * The card text.
         * @var string 
         */
        public $text = false;
        /**
         * The image URL.
         * @var string 
         */
        public $image = false;
        /**
         * Background color.
         * @var string 
         */
        public $color = "w3-white";
        /**
         * The button object.
         * @var Button 
         */
        public $button;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct('card', $path);
                $this->button = new Button(_("More"), array('event' => array('onclick' => "alert('CLICKED')"), 'class' => array('w3-green')));
        }

        public static function create($data = array('image' => '', 'title' => '', 'text' => '', 'href' => '#'))
        {
                $component = new Card();

                foreach ($data as $key => $val) {
                        $component->$key = $val;
                }

                $component->button->event->onclick = sprintf("window.location='%s'", $data['href']);

                return $component;
        }

}
