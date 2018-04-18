<?php

/*
 * Copyright (C) 2018 Anders Lövgren (Computing Department at BMC, Uppsala University).
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

namespace UUP\Web\Component\Widget\Audio;

use UUP\Web\Component\Element;

/**
 * For SoundCloud embedded audio.
 * 
 * The used URL should be the target URL extracted from the embed iframe code:
 * <code>
 * $audio = new SoundCloud();
 * $audio->url = 'https://api.soundcloud.com/tracks/34019569';
 * $audio->render();
 * </code>
 *
 * @property-write string $url The video URL.
 * @property-write boolean $resize Enable resize of video player.
 * 
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 * @package UUP
 * @subpackage Web Components
 */
class SoundCloud extends Element
{

        /**
         * The audio player URL format.
         */
        const FORMAT = "https://w.soundcloud.com/player/?url=%s&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true";

        /**
         * Constructor.
         * @param string $url The audio URL.
         */
        public function __construct($url = null)
        {
                $attr = array(
                        'src'         => self::format($url),
                        'height'      => 300,
                        'width'       => 480,
                        'frameborder' => 0,
                        'scrolling'   => 1,
                        'allow'       => "autoplay"
                );

                parent::__construct($attr, 'iframe', null);
                $this->style->resize = 'both';
        }

        public function __set($name, $value)
        {
                switch ($name) {
                        case 'url':
                                $this->attr->src = self::format($value);
                                break;
                        case 'resize':
                                $this->style->resize = $value ? 'both' : 'none';
                                break;
                        default:
                                parent::__set($name, $value);
                }
        }

        /**
         * Format audio URL.
         * @param string $url The audio URL.
         * @return string
         */
        private static function format($url)
        {
                return sprintf(self::FORMAT, urlencode($url));
        }

}
