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
use UUP\Web\Component\Collection\StyleSheet\Font\Features;
use UUP\Web\Component\Collection\StyleSheet\Font\Language;
use UUP\Web\Component\Collection\StyleSheet\Font\Size;
use UUP\Web\Component\Collection\StyleSheet\Font\Variant;

/**
 * Font CSS style.
 *
 * @property string $family Specifies the font family for text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-family: &lt;family-name&gt;|&lt;generic-family&gt;|initial|inherit;
 * 
 * @property string $kerning Controls the usage of the kerning information (how letters are spaced) (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-kerning: auto|normal|none;
 * 
 * @property string $size Specifies the font size of text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-size:medium|xx-small|x-small|small|large|x-large|xx-large|smaller|larger|&lt;length&gt;|initial|inherit;
 * 
 * @property string $stretch Selects a normal, condensed, or expanded face from a font family (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-stretch: ultra-condensed|extra-condensed|condensed|semi-condensed|normal|semi-expanded|expanded|extra-expanded|ultra-expanded|initial|inherit;
 * 
 * @property string $style Specifies the font style for text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-style: normal|italic|oblique|initial|inherit;
 * 
 * @property string $synthesis Controls which missing typefaces (bold or italic) may be synthesized by the browser (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-synthesis: none|[weight||style]
 * 
 * @property string $variant Specifies whether or not a text should be displayed in a small-caps font (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-variant: normal|small-caps|initial|inherit;
 * 
 * @property string $weight Specifies the weight of a font (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-weight: normal|bold|bolder|lighter|&lt;number&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_font_font-family.asp The font-family property.
 * @link https://www.w3schools.com/cssref/css3_pr_font-kerning.asp The font-kerning property.
 * @link https://www.w3schools.com/cssref/pr_font_font-size.asp The font-size property.
 * @link https://www.w3schools.com/cssref/css3_pr_font-stretch.asp The font-stretch property.
 * @link https://www.w3schools.com/cssref/pr_font_font-style.asp The font-style property.
 * @link https://www.w3schools.com/cssref/pr_font_font-variant.asp The font-variant property.
 * @link https://www.w3schools.com/cssref/pr_font_weight.asp The font-weight property.
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/font-synthesis The font-synthesis property.
 */
class Font extends PrefixedAttributeCollection
{

        /**
         * The font features style object.
         * @var Features 
         */
        public $features;
        /**
         * The font language style object.
         * @var Language 
         */
        public $language;
        /**
         * The font size style object.
         * @var Size 
         */
        public $size;
        /**
         * The font variant style object.
         * @var Variant 
         */
        public $variant;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('font', $attrs);

                $this->features = new Features($attrs);
                $this->language = new Language($attrs);
                $this->size = new Size($attrs);
                $this->variant = new Variant($attrs);
        }

}
