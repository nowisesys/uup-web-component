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
 * Animation Properties (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Animation
{

        /**
         * A shorthand property for all the animation properties (except animation-play-state and animation-fill-mode). Applies to CSS3.
         */
        const ALL = 'animation';
        /**
         * Specifies the animation code. Applies to CSS3.
         */
        const KEYFRAMES = '@keyframes';
        /**
         * Specifies a delay for the start of an animation. Applies to CSS3.
         */
        const DELAY = 'animation-delay';
        /**
         * Specifies whether or not the animation should play in reverse on alternate cycles. Applies to CSS3.
         */
        const DIRECTION = 'animation-direction';
        /**
         * Specifies how many seconds or milliseconds an animation takes to complete one cycle. Applies to CSS3.
         */
        const DURATION = 'animation-duration';
        /**
         * Specifies a style for the element when the animation is not playing (when it is finished, or when it has a delay). Applies to CSS3.
         */
        const FILL_MODE = 'animation-fill-mode';
        /**
         * Specifies the number of times an animation should be played. Applies to CSS3.
         */
        const ITERATION_COUNT = 'animation-iteration-count';
        /**
         * Specifies the name of the @keyframes animation. Applies to CSS3.
         */
        const NAME = 'animation-name';
        /**
         * Specifies whether the animation is running or paused. Applies to CSS3.
         */
        const PLAY_STATE = 'animation-play-state';
        /**
         * Specifies the speed curve of an animation. Applies to CSS3.
         */
        const TIMING_FUNCTION = 'animation-timing-function';

}
