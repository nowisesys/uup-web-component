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
 * Word CSS style.
 *
 * @property string $break Specifies line breaking rules for non-CJK scripts (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> word-break: normal|break-all|keep-all|initial|inherit;
 * 
 * @property string $spacing Increases or decreases the space between words in a text 
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> word-spacing: normal|&lt;length&gt;|initial|inherit;
 * 
 * @property string $wrap Allows long, unbreakable words to be broken and wrap to the next line 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> word-wrap: normal|break-word|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_word-break.asp The word-break property.
 * @link https://www.w3schools.com/cssref/pr_text_word-spacing.asp The word-spacing property.
 * @link https://www.w3schools.com/cssref/css3_pr_word-wrap.asp The word-wrap property.
 */
class Word extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('word', $attrs);
        }

}
