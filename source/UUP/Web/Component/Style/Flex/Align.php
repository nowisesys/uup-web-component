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

namespace UUP\Web\Component\Style\Flex;

/**
 * Convenience class for flex align (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Align
{

        /**
         * Specifies the alignment between the lines inside a flexible container when the items do not use all available space. Applies to CSS3.
         */
        const CONTENT = 'align-content';
        /**
         * Specifies the alignment for items inside a flexible container. Applies to CSS3.
         */
        const ITEMS = 'align-items';
        /**
         * Specifies the alignment for selected items inside a flexible container. Applies to CSS3.
         */
        const SELF = 'align-self';
}
