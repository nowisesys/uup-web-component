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

namespace UUP\Web\Component\Collection\StyleSheet\Font;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;
use UUP\Web\Component\Collection\StyleSheet\Font\Variant\East;

/**
 * Font variant CSS style.
 *
 * @property string $alternates Controls the usage of alternate glyphs associated to 
 *      alternative names defined in @feature-values (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-variant-alternates: normal|stylistic()|historical-forms|styleset()|character-variant()|swash()|ornaments()|annotation()
 * 
 * @property string $caps Controls the usage of alternate glyphs for capital letters 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-variant-caps: normal|small-caps|all-small-caps|petite-caps|all-petite-caps|unicase|titling-caps
 * 
 * @property string $ligatures Controls which ligatures and contextual forms are used in 
 *      textual content of the elements it applies to (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-variant-ligatures: normal|none|[&lt;common-lig-values&gt;||&lt;discretionary-lig-values&gt;||&lt;historical-lig-values&gt;||&lt;contextual-alt-values&gt;]
 * 
 * @property string $numeric Controls the usage of alternate glyphs for numbers, fractions, and 
 *      ordinal markers (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-variant-numeric: normal|[&lt;numeric-figure-values&gt;||&lt;numeric-spacing-values&gt;||&lt;numeric-fraction-values&gt;||ordinal||slashed-zero]
 * 
 * @property string $position Controls the usage of alternate glyphs of smaller size positioned 
 *      as superscript or subscript regarding the baseline of the font (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-variant-position: normal|sub|super
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant-alternates The font-variant-alternates property. 
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant-caps The font-variant-caps property.
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant-ligatures The font-variant-ligatures property.
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant-numeric The font-variant-numeric property.
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant-position The font-variant-position property.
 */
class Variant extends PrefixedAttributeCollection
{

        /**
         * The font variant east style object.
         * @var East 
         */
        public $east;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('font-variant', $attrs);
                $this->east = new East($attrs);
        }

}
