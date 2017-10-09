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
use UUP\Web\Component\Collection\StyleSheet\Text\Align;
use UUP\Web\Component\Collection\StyleSheet\Text\Combine;
use UUP\Web\Component\Collection\StyleSheet\Text\Decoration;
use UUP\Web\Component\Collection\StyleSheet\Text\Underline;

/**
 * Text CSS style.
 *
 * @property string $align Specifies the horizontal alignment of text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-align: left|right|center|justify|initial|inherit;
 * 
 * @property string $indent Specifies the indentation of the first line in a block 
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-indent: &lt;length&gt;|initial|inherit;
 * 
 * @property string $justify Specifies the justification method used when align is "justify" 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-justify: auto|inter-word|inter-ideograph|inter-cluster|distribute|kashida|trim|initial|inherit;
 * 
 * @property string $orientation Defines the orientation of the text in a line (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-orientation: mixed|upright|sideways
 * 
 * @property string $overflow Specifies what should happen when text overflows the containing 
 *      element (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-overflow: clip|ellipsis|string|initial|inherit;
 * 
 * @property string $shadow Adds shadow to text (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-shadow: &lt;h-shadow&gt; &lt;v-shadow&gt; &lt;blur-radius&gt; &lt;color&gt;|none|initial|inherit;
 * 
 * @property string $transform Controls the capitalization of text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-transform: none|capitalize|uppercase|lowercase|initial|inherit;
 * 
 * @property string $decoration Specifies the decoration added to text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> text-decoration: none|underline|overline|line-through|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_text_text-align.asp The text-align property.
 * @link https://www.w3schools.com/cssref/pr_text_text-indent.asp The text-indent property.
 * @link https://www.w3schools.com/cssref/css3_pr_text-justify.asp The text-justify property.
 * @link https://www.w3schools.com/cssref/css3_pr_text-overflow.asp The text-overflow property.
 * @link https://www.w3schools.com/cssref/css3_pr_text-shadow.asp The text-shadow property.
 * @link https://www.w3schools.com/cssref/pr_text_text-transform.asp The text-transform property.
 * @link https://www.w3schools.com/cssref/pr_text_text-decoration.asp The text-decoration property.
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/text-orientation The text-orientation property.
 */
class Text extends PrefixedAttributeCollection
{

        /**
         * The text align style object.
         * @var Align 
         */
        public $align;
        /**
         * The text combine style object.
         * @var Combine 
         */
        public $combine;
        /**
         * The text decoration style object.
         * @var Decoration 
         */
        public $decoration;
        /**
         * The text underline style object.
         * @var Underline 
         */
        public $underline;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('text', $attrs);

                $this->align = new Align($attrs);
                $this->combine = new Combine($attrs);
                $this->decoration = new Decoration($attrs);
                $this->underline = new Underline($attrs);
        }

}
