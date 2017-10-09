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

namespace UUP\Web\Component\Collection\StyleSheet\Text;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * Text decoration CSS style.
 *
 * @property string $color Specifies the color of the decoration (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-decoration-color: &lt;color&gt;|initial|inherit;
 * 
 * @property string $line Specifies the type of line in a decoration (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-decoration-line: none|underline|overline|line-through|initial|inherit;
 * 
 * @property string $style Specifies the style of the line in a text decoration 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-decoration-style: solid|double|dotted|dashed|wavy|initial|inherit;
 * 
 * @property string $skip Specifies what parts of the element’s content any text decoration 
 *      affecting the element must skip over.<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-decoration-skip: none|objects|spaces|ink|edges|box-decoration
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_text-decoration-color.asp The text-decoration-color property.
 * @link https://www.w3schools.com/cssref/css3_pr_text-decoration-line.asp The text-decoration-line property.
 * @link https://www.w3schools.com/cssref/css3_pr_text-decoration-style.asp The text-decoration-style property.
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/text-decoration-skip The text-decoration-skip property.
 */
class Decoration extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('text-decoration', $attrs);
        }

}
