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
 * The card collection.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Card extends Prefixed
{

        /**
         * Same as SIZE_2.
         */
        const ENABLE = true;
        /**
         * 2px bordered shadow.
         */
        const SIZE_2 = 2;
        /**
         * 4px bordered shadow.
         */
        const SIZE_4 = 4;

        /**
         * Constructor.
         * @param Properties $props The shadowed properties collection.
         */
        public function __construct($props)
        {
                parent::__construct('card', $props);
        }

}
