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

namespace UUP\Web\Component\Style;

/**
 * Text Properties (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Text
{

        /**
         * Specifies the decoration added to text. Applies to CSS1.
         */
        const DECORATION = 'text-decoration';
        /**
         * Specifies whether a punctuation character may be placed outside the line box. Applies to CSS3.
         */
        const HANGING_PUNCTUATION = 'hanging-punctuation';
        /**
         * Sets how to split words to improve the layout of paragraphs. Applies to CSS3.
         */
        const HYPHENS = 'hyphens';
        /**
         * Increases or decreases the space between characters in a text. Applies to CSS1.
         */
        const LETTER_SPACING = 'letter-spacing';
        /**
         * Specifies how/if to break lines. Applies to CSS3.
         */
        const LINE_BREAK = 'line-break';
        /**
         * Sets the line height. Applies to CSS1.
         */
        const LINE_HEIGHT = 'line-height';
        /**
         * Specifies whether or not the browser may break lines within words in order to prevent overflow (when a string is too long to fit its containing box). Applies to CSS3.
         */
        const OVERFLOW_WRAP = 'overflow-wrap';
        /**
         * Specifies the length of the tab-character. Applies to CSS3.
         */
        const TAB_SIZE = 'tab-size';
        /**
         * Specifies the horizontal alignment of text. Applies to CSS1.
         */
        const ALIGN = 'text-align';
        /**
         * Describes how the last line of a block or a line right before a forced line break is aligned when text-align is "justify". Applies to CSS3.
         */
        const ALIGN_LAST = 'text-align-last';
        /**
         * Specifies the combination of multiple characters into the space of a single character. Applies to CSS3.
         */
        const COMBINE_UPRIGHT = 'text-combine-upright';
        /**
         * Specifies the indentation of the first line in a text-block. Applies to CSS1.
         */
        const INDENT = 'text-indent';
        /**
         * Specifies the justification method used when text-align is "justify". Applies to CSS3.
         */
        const JUSTIFY = 'text-justify';
        /**
         * Controls the capitalization of text. Applies to CSS1.
         */
        const TRANSFORM = 'text-transform';
        /**
         * Specifies how white-space inside an element is handled. Applies to CSS1.
         */
        const WHITE_SPACE = 'white-space';
        /**
         * Specifies line breaking rules for non-CJK scripts. Applies to CSS3.
         */
        const WORD_BREAK = 'word-break';
        /**
         * Increases or decreases the space between words in a text. Applies to CSS1.
         */
        const WORD_SPACING = 'word-spacing';
        /**
         * Allows long, unbreakable words to be broken and wrap to the next line. Applies to CSS3.
         */
        const WORD_WRAP = 'word-wrap';

}
