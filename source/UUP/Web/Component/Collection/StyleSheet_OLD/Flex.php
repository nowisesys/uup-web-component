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
 * Flex CSS style.
 * 
 * @property string $basis Specifies the initial length of a flexible item 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> flex-basis: &lt;number&gt;|auto|initial|inherit;
 * 
 * @property string $direction Specifies the direction of the flexible items 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> flex-direction: row|row-reverse|column|column-reverse|initial|inherit;
 * 
 * @property string $flow A shorthand property for the direction and the wrap properties 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> flex-flow: &lt;flex-direction&gt; &lt;flex-wrap&gt;|initial|inherit;
 * 
 * @property string $grow Specifies how much the item will grow relative to the rest 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> flex-grow: &lt;number&gt;|initial|inherit;
 * 
 * @property string $shrink Specifies how the item will shrink relative to the rest 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> flex-shrink: &lt;number&gt;|initial|inherit;
 * 
 * @property string $wrap Specifies whether the flexible items should wrap or not 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> flex-wrap: nowrap|wrap|wrap-reverse|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_flex-basis.asp The flex-basis property.
 * @link https://www.w3schools.com/cssref/css3_pr_flex-direction.asp The flex-direction property.
 * @link https://www.w3schools.com/cssref/css3_pr_flex-flow.asp The flex-flow property.
 * @link https://www.w3schools.com/cssref/css3_pr_flex-grow.asp The flex-grow property.
 * @link https://www.w3schools.com/cssref/css3_pr_flex-shrink.asp The flex-shrink property.
 * @link https://www.w3schools.com/cssref/css3_pr_flex-wrap.asp The flex-wrap property.
 */
class Flex extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('flex', $attrs);
        }

}
