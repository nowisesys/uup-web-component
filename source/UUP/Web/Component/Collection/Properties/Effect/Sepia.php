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

namespace UUP\Web\Component\Collection\Properties\Effect;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\Properties;

/**
 * The sepia properties.
 * 
 * @property bool $min Adds a sepia effect to an element (sepia: 50%).
 * @property bool $max Adds a sepia effect to an element (sepia: 100%).
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Sepia extends PrefixedAttributeCollection
{

        /**
         * 75% sepia effect.
         */
        const ENABLE = true;
        /**
         * 50% sepia effect.
         */
        const MIN = 'min';
        /**
         * 100% sepia effect.
         */
        const MAX = 'max';

        /**
         * Constructor.
         * @param Properties $props The shadowed properties collection.
         */
        public function __construct($props)
        {
                parent::__construct('sepia', $props);
        }

}
