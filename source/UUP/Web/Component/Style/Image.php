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
 * Image Values and Replaced Content (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Image
{

        /**
         * Specifies a rotation in the right or clockwise direction that a user agent applies to an image (This property is likely going to be deprecated and its functionality moved to HTML). Applies to CSS3.
         */
        const ORIENTATION = 'image-orientation';
        /**
         * Gives a hint to the browser about what aspects of an image are most important to preserve when the image is scaled. Applies to CSS3.
         */
        const RENDERING = 'image-rendering';
        /**
         * Specifies the intrinsic resolution of all raster images used in/on the element. Applies to CSS3.
         */
        const RESOLUTION = 'image-resolution';
        /**
         * Specifies how the contents of a replaced element should be fitted to the box established by its used height and width. Applies to CSS3.
         */
        const OBJECT_FIT = 'object-fit';
        /**
         * Specifies the alignment of the replaced element inside its box. Applies to CSS3.
         */
        const OBJECT_POSITION = 'object-position';

}
