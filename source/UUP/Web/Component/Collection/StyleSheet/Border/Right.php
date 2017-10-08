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

namespace UUP\Web\Component\Collection\StyleSheet\Border;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * Border right CSS style.
 * 
 * @property string $color Sets the color of the right border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-right-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $style Sets the style of the right border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-right-style:none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $width Sets the width of the right border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-right-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_border-right_color.asp The border-right-color property.
 * @link https://www.w3schools.com/cssref/pr_border-right_style.asp The border-right-style property.
 * @link https://www.w3schools.com/cssref/pr_border-right_width.asp The border-right-width property.
 */
class Right extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('border-right', $attrs);
        }

}
