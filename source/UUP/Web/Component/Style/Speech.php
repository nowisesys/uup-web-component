<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Nowise Systems).
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

namespace UUP\Web\Component\Style;

/**
 * Speech Properties (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Speech
{

        /**
         * A shorthand property for setting the mark-before and mark-after properties. Applies to CSS3.
         */
        const MARK = 'mark';
        /**
         * Allows named markers to be attached to the audio stream. Applies to CSS3.
         */
        const MARK_AFTER = 'mark-after';
        /**
         * Allows named markers to be attached to the audio stream. Applies to CSS3.
         */
        const MARK_BEFORE = 'mark-before';
        /**
         * Specifies a phonetic pronunciation for the text contained by the corresponding element. Applies to CSS3.
         */
        const PHONEMES = 'phonemes';
        /**
         * A shorthand property for setting the rest-before and rest-after properties. Applies to CSS3.
         */
        const REST = 'rest';
        /**
         * Specifies a rest or prosodic boundary to be observed after speaking an element's content. Applies to CSS3.
         */
        const REST_AFTER = 'rest-after';
        /**
         * Specifies a rest or prosodic boundary to be observed before speaking an element's content. Applies to CSS3.
         */
        const REST_BEFORE = 'rest-before';
        /**
         * Specifies the balance between left and right channels. Applies to CSS3.
         */
        const VOICE_BALANCE = 'voice-balance';
        /**
         * Specifies how long it should take to render the selected element's content. Applies to CSS3.
         */
        const VOICE_DURATION = 'voice-duration';
        /**
         * Specifies the average pitch (a frequency) of the speaking voice. Applies to CSS3.
         */
        const VOICE_PITCH = 'voice-pitch';
        /**
         * Specifies variation in average pitch. Applies to CSS3.
         */
        const VOICE_PITCH_RANGE = 'voice-pitch-range';
        /**
         * Controls the speaking rate. Applies to CSS3.
         */
        const VOICE_RATE = 'voice-rate';
        /**
         * Indicates the strength of emphasis to be applied. Applies to CSS3.
         */
        const VOICE_STRESS = 'voice-stress';
        /**
         * Refers to the amplitude of the waveform output by the speech synthesises. Applies to CSS3.
         */
        const VOICE_VOLUME = 'voice-volume';

}
