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
 * Margin CSS style.
 *
 * @property string $bottom Sets the bottom margin of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> margin-bottom: &lt;length&gt;|auto|initial|inherit;
 * 
 * @property string $left Sets the left margin of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> margin-left: &lt;length&gt;|auto|initial|inherit;
 * 
 * @property string $right Sets the right margin of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> margin-right: &lt;length&gt;|auto|initial|inherit;
 * 
 * @property string $top Sets the top margin of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> margin-top: &lt;length&gt;|auto|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_margin-bottom.asp The margin-bottom property.
 * @link https://www.w3schools.com/cssref/pr_margin-left.asp The margin-left property.
 * @link https://www.w3schools.com/cssref/pr_margin-right.asp The margin-right property.
 * @link https://www.w3schools.com/cssref/pr_margin-top.asp The margin-top property.
 */
class Margin extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('margin', $attrs);
        }

}
