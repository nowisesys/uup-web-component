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

namespace UUP\Web\Component\Widget\Video;

use UUP\Web\Component\Element;

/**
 * For Dailymotion embedded video.
 *
 * @property-write string $url The video URL.
 * @property-write boolean $resize Enable resize of video player.
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Dailymotion extends Element
{

        /**
         * Constructor.
         * @param string $url The video URL.
         */
        public function __construct($url = null)
        {
                $attr = array(
                        'src'             => $url,
                        'height'          => 320,
                        'width'           => 480,
                        'frameborder'     => 0,
                        'allow'           => "autoplay",
                        'allowfullscreen' => true,
                );

                parent::__construct($attr, 'iframe', null);
                $this->style->resize = 'both';
        }

        public function __set($name, $value)
        {
                switch ($name) {
                        case 'url':
                                $this->attr->src = $value;
                                break;
                        case 'resize':
                                $this->style->resize = $value ? 'both' : 'none';
                                break;
                        default:
                                parent::__set($name, $value);
                }
        }

}
