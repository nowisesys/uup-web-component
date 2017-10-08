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
 * Writing Modes Properties (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Writing
{

        /**
         * Specifies the text direction/writing direction. Applies to CSS2.
         */
        const DIRECTION = 'direction';
        /**
         * Defines the orientation of the text in a line. Applies to CSS3.
         */
        const TEXT_ORIENTATION = 'text-orientation';
        /**
         * Specifies the combination of multiple characters into the space of a single character. Applies to CSS3.
         */
        const TEXT_COMBINE_UPRIGHT = 'text-combine-upright';
        /**
         * Used together with the direction property to set or return whether the text should be overridden to support multiple languages in the same document. Applies to CSS2.
         */
        const UNICODE_BIDI = 'unicode-bidi';
        /**
         * Specifies whether the text of an element can be selected. Applies to CSS3.
         */
        const USER_SELECT = 'user-select';
        /**
         * . Applies to CSS3.
         */
        const WRITING_MODE = 'writing-mode';

}
