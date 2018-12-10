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

namespace UUP\Web\Component\Style\Box;

/**
 * Convenience class for box outline (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Outline
{

        /**
         * Sets the color of an outline. Applies to CSS2.
         */
        const COLOR = 'outline-color';
        /**
         * Offsets an outline, and draws it beyond the border edge. Applies to CSS3.
         */
        const OFFSET = 'outline-offset';
        /**
         * Sets the style of an outline. Applies to CSS2.
         */
        const STYLE = 'outline-style';
        /**
         * Sets the width of an outline. Applies to CSS2.
         */
        const WIDTH = 'outline-width';

}
