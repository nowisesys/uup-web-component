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

namespace UUP\Web\Component\Style\Box;

/**
 * Convenience class for box padding (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Padding
{

        /**
         * Sets all the padding properties in one declaration. Applies to CSS1.
         */
        const ALL = 'padding';
        /**
         * Sets the bottom padding of an element. Applies to CSS1.
         */
        const BOTTOM = 'padding-bottom';
        /**
         * Sets the left padding of an element. Applies to CSS1.
         */
        const LEFT = 'padding-left';
        /**
         * Sets the right padding of an element. Applies to CSS1.
         */
        const RIGHT = 'padding-right';
        /**
         * Sets the top padding of an element. Applies to CSS1.
         */
        const TOP = 'padding-top';

}
