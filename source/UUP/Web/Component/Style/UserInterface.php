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
 * Basic User Interface Properties (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class UserInterface
{

        /**
         * Attaches one or more drop-shadows to the box. Applies to CSS3.
         */
        const BOX_SHADOW = 'box-shadow';
        /**
         * Tells the browser what the sizing properties (width and height) should include. Applies to CSS3.
         */
        const BOX_SIZING = 'box-sizing';
        /**
         * Used with the :before and :after pseudo-elements, to insert generated content. Applies to CSS2.
         */
        const CONTENT = 'content';
        /**
         * Specifies the type of cursor to be displayed. Applies to CSS2.
         */
        const CURSOR = 'cursor';
        /**
         * Controls the state of the input method editor for text fields. Applies to CSS3.
         */
        const IME_MODE = 'ime-mode';
        /**
         * Sets all the outline properties in one declaration. Applies to CSS2.
         */
        const OUTLINE = 'outline';
        /**
         * Sets the color of an outline. Applies to CSS2.
         */
        const OUTLINE_COLOR = 'outline-color';
        /**
         * Offsets an outline, and draws it beyond the border edge. Applies to CSS3.
         */
        const OUTLINE_OFFSET = 'outline-offset';
        /**
         * Sets the style of an outline. Applies to CSS2.
         */
        const OUTLINE_STYLE = 'outline-style';
        /**
         * Sets the width of an outline. Applies to CSS2.
         */
        const OUTLINE_WIDTH = 'outline-width';
        /**
         * Specifies whether or not an element is resizable by the user. Applies to CSS3.
         */
        const RESIZE = 'resize';
        /**
         * Specifies what should happen when text overflows the containing element. Applies to CSS3.
         */
        const TEXT_OVERFLOW = 'text-overflow';

}
