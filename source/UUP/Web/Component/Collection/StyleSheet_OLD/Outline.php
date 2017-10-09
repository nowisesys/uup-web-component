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

namespace UUP\Web\Component\Collection\StyleSheet;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * Outline CSS style.
 *
 * @property string $color Sets the color of an outline (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> outline-color: invert|&lt;color&gt;|initial|inherit;
 * 
 * @property string $offset Offsets an outline, and draws it beyond the border edge 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> outline-offset: &lt;length&gt;|initial|inherit;
 * 
 * @property string $style Sets the style of an outline (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> outline-style: none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $width Sets the width of an outline (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> outline-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_outline-color.asp The outline-color property.
 * @link https://www.w3schools.com/cssref/css3_pr_outline-offset.asp The outline-offset property.
 * @link https://www.w3schools.com/cssref/pr_outline-style.asp The outline-style property.
 * @link https://www.w3schools.com/cssref/pr_outline-width.asp The outline-width property.
 */
class Outline extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('outline', $attrs);
        }

}
