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
 * Padding CSS style.
 *
 * @property string $bottom Sets the bottom padding of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> padding-bottom: &lt;length&gt;|initial|inherit;
 * 
 * @property string $left Sets the left padding of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> padding-left: &lt;length&gt;|initial|inherit;
 * 
 * @property string $right Sets the right padding of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> padding-right: &lt;length&gt;|initial|inherit;
 * 
 * @property string $top Sets the top padding of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> padding-top: &lt;length&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_padding-bottom.asp The padding-bottom property.
 * @link https://www.w3schools.com/cssref/pr_padding-left.asp The padding-left property.
 * @link https://www.w3schools.com/cssref/pr_padding-right.asp The padding-right property.
 * @link https://www.w3schools.com/cssref/pr_padding-top.asp The padding-top property.
 */
class Padding extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('padding', $attrs);
        }

}
