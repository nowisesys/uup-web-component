<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Nowise Systems).
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

namespace UUP\Web\Component\Style;

/**
 * Font Properties (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Font
{

        /**
         * Sets all the font properties in one declaration. Applies to CSS1.
         */
        const ALL = 'font';
        /**
         * A rule that allows websites to download and use fonts other than the "web-safe" fonts. Applies to CSS3.
         */
        const FACE = '@font-face';
        /**
         * Allows authors to use a common name in font-variant-alternate for feature activated differently in OpenType. Applies to CSS3.
         */
        const FEATURE_VALUES = '@font-feature-values';
        /**
         * Specifies the font family for text. Applies to CSS1.
         */
        const FAMILY = 'font-family';
        /**
         * Allows control over advanced typographic features in OpenType fonts. Applies to CSS3.
         */
        const FEATURE_SETTINGS = 'font-feature-settings';
        /**
         * Controls the usage of the kerning information (how letters are spaced). Applies to CSS3.
         */
        const KERNING = 'font-kerning';
        /**
         * Controls the usage of language-specific glyphs in a typeface. Applies to CSS3.
         */
        const LANGUAGE_OVERRIDE = 'font-language-override';
        /**
         * Specifies the font size of text. Applies to CSS1.
         */
        const SIZE = 'font-size';
        /**
         * Preserves the readability of text when font fallback occurs. Applies to CSS3.
         */
        const SIZE_ADJUST = 'font-size-adjust';
        /**
         * Selects a normal, condensed, or expanded face from a font family. Applies to CSS3.
         */
        const STRETCH = 'font-stretch';
        /**
         * Specifies the font style for text. Applies to CSS1.
         */
        const STYLE = 'font-style';
        /**
         * Controls which missing typefaces (bold or italic) may be synthesized by the browser. Applies to CSS3.
         */
        const SYNTHESIS = 'font-synthesis';
        /**
         * Specifies whether or not a text should be displayed in a small-caps font. Applies to CSS1.
         */
        const VARIANT = 'font-variant';
        /**
         * Controls the usage of alternate glyphs associated to alternative names defined in @font-feature-values. Applies to CSS3.
         */
        const VARIANT_ALTERNATES = 'font-variant-alternates';
        /**
         * Controls the usage of alternate glyphs for capital letters. Applies to CSS3.
         */
        const VARIANT_CAPS = 'font-variant-caps';
        /**
         * Controls the usage of alternate glyphs for East Asian scripts (e.g Japanese and Chinese). Applies to CSS3.
         */
        const VARIANT_EAST_ASIAN = 'font-variant-east-asian';
        /**
         * Controls which ligatures and contextual forms are used in textual content of the elements it applies to. Applies to CSS3.
         */
        const VARIANT_LIGATURES = 'font-variant-ligatures';
        /**
         * Controls the usage of alternate glyphs for numbers, fractions, and ordinal markers. Applies to CSS3.
         */
        const VARIANT_NUMERIC = 'font-variant-numeric';
        /**
         * Controls the usage of alternate glyphs of smaller size positioned as superscript or subscript regarding the baseline of the font. Applies to CSS3.
         */
        const VARIANT_POSITION = 'font-variant-position';
        /**
         * Specifies the weight of a font. Applies to CSS1.
         */
        const WEIGHT = 'font-weight';

}
