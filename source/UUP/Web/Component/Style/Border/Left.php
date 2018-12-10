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

namespace UUP\Web\Component\Style\Border;

/**
 * Convenience class for border left (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Left
{

        /**
         * Sets the color of the left border. Applies to CSS1.
         */
        const COLOR = 'border-left-color';
        /**
         * Sets the style of the left border. Applies to CSS1.
         */
        const STYLE = 'border-left-style';
        /**
         * Sets the width of the left border. Applies to CSS1.
         */
        const WIDTH = 'border-left-width';
        /**
         * Defines the shape of the border of the top-left corner. Applies to CSS3.
         */
        const RADIUS_TOP = 'border-top-left-radius';
        /**
         * Defines the shape of the border of the bottom-left corner. Applies to CSS3.
         */
        const RADIUS_BOTTOM = 'border-bottom-left-radius';

}
