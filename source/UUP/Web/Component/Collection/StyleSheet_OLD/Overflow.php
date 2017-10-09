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
 * Overflow CSS style.
 *
 * @property string $wrap Specifies whether or not the browser may break lines within words 
 *      in order to prevent overflow (when a string is too long to fit its containing box) 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> overflow-wrap: normal|break-word;
 * 
 * @property string $x Specifies whether or not to clip the left/right edges of the content, 
 *      if it overflows the element's content area (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> overflow-x: visible|hidden|scroll|auto|initial|inherit;
 * 
 * @property string $y Specifies whether or not to clip the top/bottom edges of the content, 
 *      if it overflows the element's content area (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> overflow-y: visible|hidden|scroll|auto|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/overflow-wrap The overflow-wrap property.
 * @link https://www.w3schools.com/cssref/css3_pr_overflow-x.asp The overflow-x property.
 * @link https://www.w3schools.com/cssref/css3_pr_overflow-y.asp The overflow-y property.
 */
class Overflow extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('overflow', $attrs);
        }

}
