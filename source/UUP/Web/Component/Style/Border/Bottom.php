<?php

/*
 * Copyright (C) 2017 Anders Lövgren (QNET).
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
 * Convenience class for border bottom (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Bottom
{

        /**
         * Sets the color of the bottom border. Applies to CSS1.
         */
        const COLOR = 'border-bottom-color';
        /**
         * Defines the shape of the border of the bottom-left corner. Applies to CSS3.
         */
        const LEFT_RADIUS = 'border-bottom-left-radius';
        /**
         * Defines the shape of the border of the bottom-right corner. Applies to CSS3.
         */
        const RIGHT_RADIUS = 'border-bottom-right-radius';
        /**
         * Sets the style of the bottom border. Applies to CSS1.
         */
        const STYLE = 'border-bottom-style';
        /**
         * Sets the width of the bottom border. Applies to CSS1.
         */
        const WIDTH = 'border-bottom-width';

}