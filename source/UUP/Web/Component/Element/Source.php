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
         * The MIME type for MP4 video (*.mp4).
         */
        const MIME_VIDEO_MP4 = 'video/mp4';
        /**
         * The MIME type for WebM video (*.webm).
         */
        const MIME_VIDEO_WEBM = 'video/webm';
        /**
         * The MIME type for Ogg Vorbis video (*.ogg).
         */
        const MIME_VIDEO_OGG = 'video/ogg';
        /**
         * The MIME type for QuickTime video (*.mov).
         */
        const MIME_VIDEO_QUICKTIME = 'video/quicktime';
        /**
         * The MIME type for Flash video (*.flv).
         */
        const MIME_VIDEO_FLV = 'video/x-flv';
        /**
         * The MIME type for 3GP Mobile video (*.3gp).
         */
        const MIME_VIDEO_3GP = 'video/3gpp';
        /**
         * The MIME type for Windows Media video (*.wmv).
         */
        const MIME_VIDEO_WMV = 'video/x-ms-wmv';
        /**
         * The MIME type for ASF video (*.asf).
         */
        const MIME_VIDEO_ASF = 'application/vnd.ms-asf';
        /**
         * The MIME type for AVI video (*.avi).
         */
        const MIME_VIDEO_AVI = 'video/x-msvideo';
        /**
         * The MIME type for Opus audio (*.opus).
         */
        const MIME_AUDIO_OPUS = 'audio/ogg; codecs="opus"';
        /**
         * The MIME type for WebM (v2) audio (*.webm).
         */
        const MIME_AUDIO_WEBMV2 = 'audio/webm; codecs="opus"';
        /**
         * The MIME type for WebM audio (*.weba).
         */
        const MIME_AUDIO_WEBM = 'audio/webm';
        /**
         * The MIME type for Ogg Vorbis audio (*.ogg).
         */
        const MIME_AUDIO_OGG = 'audio/ogg';
        /**
         * The MIME type for WAV audio (*.wav).
         */
        const MIME_AUDIO_WAV = 'audio/x-wav';
        /**
         * The MIME type for MP3 audio (*.mp3, *.mpga).
         */
        const MIME_AUDIO_MP3 = 'audio/mpeg';
        /**
         * The MIME type for FLAC audio (*.flac).
         */
        const MIME_AUDIO_FLAC = 'audio/flac';

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
