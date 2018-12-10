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
 * Paged Media and Generated Content (CSS).
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class Page
{

        /**
         * Sets the behaviour of the background and border of an element at page-break, or, for in-line elements, at line-break.. Applies to CSS3.
         */
        const BOX_DECORATION_BREAK = 'box-decoration-break';
        /**
         * Sets the minimum number of lines that must be left at the bottom of a page when a page break occurs inside an element. Applies to CSS2.
         */
        const ORPHANS = 'orphans';
        /**
         * Sets the page-breaking behavior after an element. Applies to CSS2.
         */
        const BREAK_AFTER = 'page-break-after';
        /**
         * Sets the page-breaking behavior before an element. Applies to CSS2.
         */
        const BREAK_BEFORE = 'page-break-before';
        /**
         * Sets the page-breaking behavior inside an element. Applies to CSS2.
         */
        const BREAK_INSIDE = 'page-break-inside';
        /**
         * Adds crop and/or cross marks to the document. Applies to CSS3.
         */
        const MARKS = 'marks';
        /**
         * Sets the type of quotation marks for embedded quotations. Applies to CSS2.
         */
        const QUOTES = 'quotes';
        /**
         * Defines effects (e.g. blurring or color shifting) on an element before the element is displayed. Applies to CSS3.
         */
        const FILTER = 'filter';

}
