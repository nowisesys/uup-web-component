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

namespace UUP\Web\Component\Widget\Audio;

use UUP\Web\Component\Element;

/**
 * For Spotify embedded audio.
 * 
 * The used URL should be the target URL extracted from the embed iframe code:
 * <code>
 * $audio = new Spotify();
 * $audio->album = '1DFixLWuPkv3KT3TnV35m3';
 * $audio->render();
 * </code>
 *
 * @property-write string $album The album identifier.
 * @property-write string $theme The player theme (black or white).
 * @property-write string $view The player display (list or coverart).
 * @property-write boolean $resize Enable resize of video player.
 * 
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Spotify extends Element
{

        /**
         * The audio player URL format.
         */
        const FORMAT = "https://open.spotify.com/embed?uri=spotify:album:%s&view=%s&theme=%s";
        /**
         * Display player using dark theme.
         */
        const THEME_DARK = 'black';
        /**
         * Display player using light theme.
         */
        const THEME_LIGHT = 'white';
        /**
         * Display player with list view.
         */
        const VIEW_LIST = 'list';
        /**
         * Display player with covertart view.
         */
        const VIEW_COVER = 'coverart';

        /**
         * The URL format options.
         * @var array 
         */
        private $_options = array(
                'album' => '',
                'view'  => self::VIEW_LIST,
                'theme' => self::THEME_DARK
        );

        /**
         * Constructor.
         * @param string $album The album identifier.
         */
        public function __construct($album = null)
        {
                $this->_options['album'] = $album;

                $attr = array(
                        'height'            => 300,
                        'width'             => 480,
                        'frameborder'       => 0,
                        'allowtransparency' => "true",
                        'allow'             => "encrypted-media"
                );

                parent::__construct($attr, 'iframe', null);
                $this->style->resize = 'both';
        }

        public function __set($name, $value)
        {
                switch ($name) {
                        case 'album':
                                $this->_options['album'] = $value;
                                break;
                        case 'theme':
                                $this->_options['theme'] = $value;
                                break;
                        case 'view':
                                $this->_options['view'] = $value;
                                break;
                        case 'resize':
                                $this->style->resize = $value ? 'both' : 'none';
                                break;
                        default:
                                parent::__set($name, $value);
                }
        }

        public function render($transform = false)
        {
                $this->attr->src = sprintf(
                    self::FORMAT, $this->_options['album'], $this->_options['view'], $this->_options['theme']
                );
                parent::render($transform);
        }

}
