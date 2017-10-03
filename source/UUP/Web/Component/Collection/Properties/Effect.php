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

use UUP\Web\Component\Collection\Properties\Base\Cluster;
use UUP\Web\Component\Collection\Properties\Effect\Grayscale;
use UUP\Web\Component\Collection\Properties\Effect\Opacity;
use UUP\Web\Component\Collection\Properties\Effect\Sepia;

/**
 * The effect properties.
 * 
 * @property bool|string $opacity Adds opacity/transparency to an element or turn it off (true, min, max or off).
 * @property bool|string $grayscale Adds a grayscale effect to an element (true, min or max).
 * @property bool|string $sepia Adds a sepia effect to an element (true, min or max).
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @see Opacity
 * @see Grayscale
 * @see Sepia
 */
class Effect extends Cluster
{
        
}
