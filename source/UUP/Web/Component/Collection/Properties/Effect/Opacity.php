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

use UUP\Web\Component\Collection\Properties\Base\Prefixed;

/**
 * The opacity properties.
 * 
 * Support for opacity property settings. Defines the transparency on elements.
 * 
 * @property bool $off Turns off opacity/transparency (opacity: 1.0).
 * @property bool $min Adds opacity/transparency to an element (opacity: 0.75).
 * @property bool $max Adds opacity/transparency to an element (opacity: 0.25).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Opacity extends Prefixed
{
        /**
         * 0.6 opacity.
         */
        const ENABLE = true;

        /**
         * 1.0 opacity.
         */
        const OFF = 'off';
        /**
         * 0.75 opacity.
         */
        const MIN = 'min';
        /**
         * 0.25 opacity.
         */
        const MAX = 'max';

        /**
         * Constructor.
         * @param Properties $props The shadowed properties collection.
         */
        public function __construct($props)
        {
                parent::__construct('opacity', $props);
        }

}
