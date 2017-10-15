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

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;

/**
 * The round properties.
 *
 * @property bool $small Element rounded (border-radius) 2px.
 * @property bool $medium Element rounded (border-radius) 4px.
 * @property bool $large Element rounded (border-radius) 8px.
 * @property bool $xlarge Element rounded (border-radius) 16px.
 * @property bool $xxlarge Element rounded (border-radius) 32px.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Round extends PrefixedAttributeCollection
{

        /**
         * Element rounded (border-radius) 4px.
         */
        const ENABLE = true;
        /**
         * Element rounded (border-radius) 2px.
         */
        const SMALL = 'small';
        /**
         * Element rounded (border-radius) 4px.
         */
        const MEDIUM = 'medium';
        /**
         * Element rounded (border-radius) 8px.
         */
        const LARGE = 'large';
        /**
         * Element rounded (border-radius) 16px.
         */
        const LARGE_X = 'xlarge';
        /**
         * Element rounded (border-radius) 32px.
         */
        const LARGE_XX = 'xxlarge';

        public function __construct($props)
        {
                parent::__construct('round', $props);
        }

}
