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
use UUP\Web\Component\Collection\StyleSheet\Column\Rule;

/**
 * Column CSS style.
 * 
 * @property string $count Specifies the number of columns an element should be divided 
 *      into (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-count: &lt;number&gt;|auto|initial|inherit;
 * 
 * @property string $fill Specifies how to fill columns (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-fill: balance|auto|initial|inherit;
 * 
 * @property string $gap Specifies the gap between the columns (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-gap: &lt;length&gt;|normal|initial|inherit;
 * 
 * @property string $rule A shorthand property for setting all the rule-* properties 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-rule: &lt;column-rule-width&gt; &lt;column-rule-style&gt; &lt;column-rule-color&gt;|initial|inherit;
 * 
 * @property string $span Specifies how many columns an element should span across 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-span: 1|all|initial|inherit;
 * 
 * @property string $width Specifies the width of the columns (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-width: auto|&lt;length&gt;|initial|inherit;
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_column-count.asp The column-count property.
 * @link https://www.w3schools.com/cssref/css3_pr_column-fill.asp The column-fill property.
 * @link https://www.w3schools.com/cssref/css3_pr_column-gap.asp The column-gap property.
 * @link https://www.w3schools.com/cssref/css3_pr_column-rule.asp The column-rule property.
 * @link https://www.w3schools.com/cssref/css3_pr_column-span.asp The column-span property.
 * @link https://www.w3schools.com/cssref/css3_pr_column-width.asp The column-width property.
 */
class Column extends PrefixedAttributeCollection
{

        /**
         * The column rule style object.
         * @var Rule 
         */
        public $rule;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('column', $attrs);
                $this->rule = new Rule($attrs);
        }

}
