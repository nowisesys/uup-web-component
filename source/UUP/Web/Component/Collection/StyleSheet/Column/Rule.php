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

namespace UUP\Web\Component\Collection\StyleSheet\Column;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * Column rule CSS style.
 * 
 * @property string $color Specifies the color of the rule between columns (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-rule-color: &lt;color&gt;|initial|inherit;
 * 
 * @property string $style Specifies the style of the rule between columns (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-rule-style: none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $width Specifies the width of the rule between columns (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> column-rule-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_column-rule-color.asp The column-rule-color property.
 * @link https://www.w3schools.com/cssref/css3_pr_column-rule-style.asp The column-rule-style property.
 * @link https://www.w3schools.com/cssref/css3_pr_column-rule-width.asp The column-rule-width property.
 */
class Rule extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('column-rule', $attrs);
        }

}
