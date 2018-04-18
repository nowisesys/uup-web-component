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

namespace UUP\Web\Component\Element;

use UUP\Web\Component\Element;

/**
 * Source HTML element.
 *
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 * @package UUP
 * @subpackage Web Components
 */
class Source extends Element
{

        /**
         * The MIME type for MP4.
         */
        const MIME_VIDEO_MP4 = 'video/mp4';
        /**
         * The MIME type for WebM.
         */
        const MIME_VIDEO_WEBM = 'video/webm';
        /**
         * The MIME type for Ogg.
         */
        const MIME_VIDEO_OGG = 'video/ogg';
        /**
         * The MIME type for QuickTime.
         */
        const MIME_VIDEO_QUICKTIME = 'video/quicktime';
        /**
         * The MIME type for Flash.
         */
        const MIME_VIDEO_FLV = 'video/x-flv';
        /**
         * The MIME type for 3GP Mobile.
         */
        const MIME_VIDEO_3GP = 'video/3gpp';
        /**
         * The MIME type for Windows Media.
         */
        const MIME_VIDEO_WMV = 'video/x-ms-wmv';
        /**
         * The MIME type for ASF video.
         */
        const MIME_VIDEO_ASF = 'application/vnd.ms-asf';
        /**
         * The MIME type for AVI video.
         */
        const MIME_VIDEO_AVI = 'video/x-msvideo';

        /**
         * Constructor.
         * 
         * @param string $src The URL of the media file.
         * @param string $type The resource MIME type.
         * @param array $attr All optional attributes.
         */
        public function __construct($src, $type = null, $attr = array())
        {
                $attr['src'] = $src;
                $attr['type'] = $type;
                parent::__construct($attr, 'source', null);
        }

}
