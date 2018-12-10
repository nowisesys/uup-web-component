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
 * Transitions Properties (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Transition
{

        /**
         * A shorthand property for setting the four transition properties. Applies to CSS3.
         */
        const ALL = 'transition';
        /**
         * Specifies the name of the CSS property the transition effect is for. Applies to CSS3.
         */
        const PROPERTY = 'transition-property';
        /**
         * Specifies how many seconds or milliseconds a transition effect takes to complete. Applies to CSS3.
         */
        const DURATION = 'transition-duration';
        /**
         * Specifies the speed curve of the transition effect. Applies to CSS3.
         */
        const TIMING_FUNCTION = 'transition-timing-function';
        /**
         * Specifies when the transition effect will start. Applies to CSS3.
         */
        const DELAY = 'transition-delay';

}
