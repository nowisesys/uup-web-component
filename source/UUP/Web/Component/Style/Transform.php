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
 * Transform Properties (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Transform
{

        /**
         * Defines whether or not an element should be visible when not facing the screen. Applies to CSS3.
         */
        const BACKFACE_VISIBILITY = 'backface-visibility';
        /**
         * Specifies the perspective on how CSS3D elements are viewed. Applies to CSS3.
         */
        const PERSPECTIVE = 'perspective';
        /**
         * Specifies the bottom position of CSS3D elements. Applies to CSS3.
         */
        const PERSPECTIVE_ORIGIN = 'perspective-origin';
        /**
         * Applies a CSS2D or CSS3D transformation to an element. Applies to CSS3.
         */
        const APPLY = 'transform';
        /**
         * Allows you to change the position on transformed elements. Applies to CSS3.
         */
        const ORIGIN = 'transform-origin';
        /**
         * Specifies how nested elements are rendered in CSS3D space. Applies to CSS3.
         */
        const STYLE = 'transform-style';

}
