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

namespace UUP\Web\Component\Style\Box;

/**
 * Convenience class for box margin (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Margin
{

        /**
         * Sets all the margin properties in one declaration. Applies to CSS1.
         */
        const ALL = 'margin';
        /**
         * Sets the bottom margin of an element. Applies to CSS1.
         */
        const BOTTOM = 'margin-bottom';
        /**
         * Sets the left margin of an element. Applies to CSS1.
         */
        const LEFT = 'margin-left';
        /**
         * Sets the right margin of an element. Applies to CSS1.
         */
        const RIGHT = 'margin-right';
        /**
         * Sets the top margin of an element. Applies to CSS1.
         */
        const TOP = 'margin-top';

}
