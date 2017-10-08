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
 * Multi-column Layout Properties (CSS).
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Column
{

        /**
         * Specifies the page-, column-, or region-break behavior after the generated box. Applies to CSS3.
         */
        const BREAK_AFTER = 'break-after';
        /**
         * Specifies the page-, column-, or region-break behavior before the generated box. Applies to CSS3.
         */
        const BREAK_BEFORE = 'break-before';
        /**
         * Specifies the page-, column-, or region-break behavior inside the generated box. Applies to CSS3.
         */
        const BREAK_INSIDE = 'break-inside';
        /**
         * Specifies the number of columns an element should be divided into. Applies to CSS3.
         */
        const COUNT = 'column-count';
        /**
         * Specifies how to fill columns. Applies to CSS3.
         */
        const FILL = 'column-fill';
        /**
         * Specifies the gap between the columns. Applies to CSS3.
         */
        const GAP = 'column-gap';
        /**
         * A shorthand property for setting all the column-rule-* properties. Applies to CSS3.
         */
        const RULE = 'column-rule';
        /**
         * Specifies the color of the rule between columns. Applies to CSS3.
         */
        const RULE_COLOR = 'column-rule-color';
        /**
         * Specifies the style of the rule between columns. Applies to CSS3.
         */
        const RULE_STYLE = 'column-rule-style';
        /**
         * Specifies the width of the rule between columns. Applies to CSS3.
         */
        const RULE_WIDTH = 'column-rule-width';
        /**
         * Specifies how many columns an element should span across. Applies to CSS3.
         */
        const SPAN = 'column-span';
        /**
         * Specifies the width of the columns. Applies to CSS3.
         */
        const WIDTH = 'column-width';
        /**
         * A shorthand property for setting column-width and column-count. Applies to CSS3.
         */
        const COLUMNS = 'columns';
        /**
         * Sets the minimum number of lines that must be left at the top of a page when a page break occurs inside an element. Applies to CSS2.
         */
        const WIDOWS = 'widows';

}
