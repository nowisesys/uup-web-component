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

namespace UUP\Web\Component\Style\Speech;

/**
 * Convenience class for speech voice (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Voice
{

        /**
         * Specifies the balance between left and right channels. Applies to CSS3.
         */
        const BALANCE = 'voice-balance';
        /**
         * Specifies how long it should take to render the selected element's content. Applies to CSS3.
         */
        const DURATION = 'voice-duration';
        /**
         * Specifies the average pitch (a frequency) of the speaking voice. Applies to CSS3.
         */
        const PITCH = 'voice-pitch';
        /**
         * Specifies variation in average pitch. Applies to CSS3.
         */
        const PITCH_RANGE = 'voice-pitch-range';
        /**
         * Controls the speaking rate. Applies to CSS3.
         */
        const RATE = 'voice-rate';
        /**
         * Indicates the strength of emphasis to be applied. Applies to CSS3.
         */
        const STRESS = 'voice-stress';
        /**
         * Refers to the amplitude of the waveform output by the speech synthesises. Applies to CSS3.
         */
        const VOLUME = 'voice-volume';

}
