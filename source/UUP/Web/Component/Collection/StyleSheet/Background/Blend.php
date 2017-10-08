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

namespace UUP\Web\Component\Collection\StyleSheet\Background;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;

/**
 * Background blend CSS style.
 *
 * @property string $mode Specifies the blending mode of each background layer 
 *      (color/image, since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-blend-mode: normal|multiply|screen|overlay|darken|lighten|color-dodge|saturation|color|luminosity;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_background-blend-mode.asp The background-blend-mode property.
 */
class Blend extends PrefixedAttributeCollection
{

        public function __construct($props)
        {
                parent::__construct('background-blend', $props);
        }

}
