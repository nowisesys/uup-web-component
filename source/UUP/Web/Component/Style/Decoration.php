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
 * Text Decoration Properties (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Decoration
{

        /**
         * Specifies the color of the text-decoration. Applies to CSS3.
         */
        const COLOR = 'text-decoration-color';
        /**
         * Specifies the type of line in a text-decoration. Applies to CSS3.
         */
        const LINE = 'text-decoration-line';
        /**
         * Specifies the style of the line in a text decoration. Applies to CSS3.
         */
        const STYLE = 'text-decoration-style';
        /**
         * Adds shadow to text. Applies to CSS3.
         */
        const SHADOW = 'text-shadow';
        /**
         * Specifies the position of the underline which is set using the text-decoration property. Applies to CSS3.
         */
        const UNDERLINE_POSITION = 'text-underline-position';

}
