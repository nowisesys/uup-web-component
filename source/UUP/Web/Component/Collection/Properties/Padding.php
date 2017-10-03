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

namespace UUP\Web\Component\Collection\Properties;

use UUP\Web\Component\Collection\Properties\Base\Prefixed;

/**
 * The padding properties.
 * 
 * @property string $small Padding 4px top and bottom, and 8px left and right.
 * @property string $large Padding 12px top and bottom, and 24px left and right.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Padding extends Prefixed
{

        /**
         * Padding 8px top and bottom, and 16px left and right.
         */
        const ENABLE = true;
        /**
         * Padding 4px top and bottom, and 8px left and right.
         */
        const SMALL = 'small';
        /**
         * Padding 12px top and bottom, and 24px left and right.
         */
        const LARGE = 'large';
        /**
         * Padding 16px top and bottom.
         */
        const SIZE_16 = 16;
        /**
         * Padding 24px top and bottom.
         */
        const SIZE_24 = 24;
        /**
         * Padding 32px top and bottom.
         */
        const SIZE_32 = 32;
        /**
         * Padding 48px top and bottom.
         */
        const SIZE_48 = 48;
        /**
         * Padding 64px top and bottom.
         */
        const SIZE_64 = 64;

        public function __construct($props)
        {
                parent::__construct('padding', $props);
        }

}
