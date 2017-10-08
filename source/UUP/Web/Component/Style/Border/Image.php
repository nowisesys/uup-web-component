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
 * Convenience class for border image (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Image
{
        /**
         * Specifies the amount by which the border image area extends beyond the border box. Applies to CSS3.
         */
        const OUTSET = 'border-image-outset';
        /**
         * Specifies whether the border image should be repeated, rounded or stretched. Applies to CSS3.
         */
        const REPEAT = 'border-image-repeat';
        /**
         * Specifies how to slice the border image. Applies to CSS3.
         */
        const SLICE = 'border-image-slice';
        /**
         * Specifies the path to the image to be used as a border. Applies to CSS3.
         */
        const SOURCE = 'border-image-source';
        /**
         * Specifies the widths of the image-border. Applies to CSS3.
         */
        const WIDTH = 'border-image-width';

}
