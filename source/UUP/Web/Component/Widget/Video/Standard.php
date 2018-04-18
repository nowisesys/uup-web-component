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

namespace UUP\Web\Component\Widget\Video;

use UUP\Web\Component\Element;

/**
 * Standard HTML5 video player.
 * 
 * Use the URL property if one video format is enough: 
 * <code>
 * $video = new Standard();
 * $video->url = 'file.mp4';
 * $video->render();
 * </code>
 * 
 * Add source element as child component to support multiple video formats
 * for a single video stream:
 * <code>
 * $video = new Standard();
 * $video->add(new Source('file.mp4', 'video/mp4'));
 * $video->add(new Source('file.ogg', 'video/ogg'));
 * $video->render();
 * </code>
 * 
 * @property-write string $url The video URL.
 * @property-write string $poster URL for poster frame to show until the user plays or seeks.
 * @property-write boolean $resize Enable resize of video player.
 *
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 * @package UUP
 * @subpackage Web Components
 */
class Standard extends Element
{

        /**
         * Constructor.
         * @param string $url The video URL.
         */
        public function __construct($url = null)
        {
                $text = _("I'm sorry; your browser doesn't support HTML5 video.");
                $attr = array(
                        'src'             => $url,
                        'height'          => 320,
                        'width'           => 480,
                        'playsinline'     => true,
                        'allowfullscreen' => true,
                        'controls'        => true
                );

                parent::__construct($attr, 'video', $text);
                $this->style->resize = 'both';
        }

        public function __set($name, $value)
        {
                switch ($name) {
                        case 'url':
                                $this->attr->src = $value;
                                break;
                        case 'poster':
                                $this->attr->poster = $value;
                                break;
                        case 'resize':
                                $this->style->resize = $value ? 'both' : 'none';
                                break;
                        default:
                                parent::__set($name, $value);
                }
        }

}
