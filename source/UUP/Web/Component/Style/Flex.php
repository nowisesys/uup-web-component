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
 * Flexible Box Layout (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Flex
{

        /**
         * Specifies the alignment between the lines inside a flexible container when the items do not use all available space. Applies to CSS3.
         */
        const ALIGN_CONTENT = 'align-content';
        /**
         * Specifies the alignment for items inside a flexible container. Applies to CSS3.
         */
        const ALIGN_ITEMS = 'align-items';
        /**
         * Specifies the alignment for selected items inside a flexible container. Applies to CSS3.
         */
        const ALIGN_SELF = 'align-self';
        /**
         * Specifies the length of the item, relative to the rest. Applies to CSS3.
         */
        const ALL = 'flex';
        /**
         * Specifies the initial length of a flexible item. Applies to CSS3.
         */
        const BASIS = 'flex-basis';
        /**
         * Specifies the direction of the flexible items. Applies to CSS3.
         */
        const DIRECTION = 'flex-direction';
        /**
         * A shorthand property for the flex-direction and the flex-wrap properties. Applies to CSS3.
         */
        const FLOW = 'flex-flow';
        /**
         * Specifies how much the item will grow relative to the rest. Applies to CSS3.
         */
        const GROW = 'flex-grow';
        /**
         * Specifies how the item will shrink relative to the rest. Applies to CSS3.
         */
        const SHRINK = 'flex-shrink';
        /**
         * Specifies whether the flexible items should wrap or not. Applies to CSS3.
         */
        const WRAP = 'flex-wrap';
        /**
         * Specifies the alignment between the items inside a flexible container when the items do not use all available space. Applies to CSS3.
         */
        const JUSTIFY_CONTENT = 'justify-content';
        /**
         * Sets the order of the flexible item, relative to the rest. Applies to CSS3.
         */
        const ORDER = 'order';

}
