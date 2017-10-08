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

namespace UUP\Web\Component\Style;

/**
 * Background Properties (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Background
{

        /**
         * A shorthand property for setting all the background properties in one declaration. Applies to CSS1.
         */
        const ALL = 'background';
        /**
         * Sets whether a background image is fixed or scrolls with the rest of the page. Applies to CSS1.
         */
        const ATTACHMENT = 'background-attachment';
        /**
         * Specifies the blending mode of each background layer (color/image). Applies to CSS3.
         */
        const BLEND_MODE = 'background-blend-mode';
        /**
         * Specifies the background color of an element. Applies to CSS1.
         */
        const COLOR = 'background-color';
        /**
         * Specifies one or more background images for an element. Applies to CSS1.
         */
        const IMAGE = 'background-image';
        /**
         * Specifies the position of a background image. Applies to CSS1.
         */
        const POSITION = 'background-position';
        /**
         * Sets how a background image will be repeated. Applies to CSS1.
         */
        const REPEAT = 'background-repeat';
        /**
         * Specifies the painting area of the background. Applies to CSS3.
         */
        const CLIP = 'background-clip';
        /**
         * Specifies where the background image(s) is/are positioned. Applies to CSS3.
         */
        const ORIGIN = 'background-origin';
        /**
         * Specifies the size of the background image(s). Applies to CSS3.
         */
        const SIZE = 'background-size';

}
