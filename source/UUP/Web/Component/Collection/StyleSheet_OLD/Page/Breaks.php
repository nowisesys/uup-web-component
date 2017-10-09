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

namespace UUP\Web\Component\Collection\StyleSheet\Page;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * Page break CSS style.
 *
 * @property string $after Sets the page-breaking behavior after an element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> page-break-after: auto|always|avoid|left|right|initial|inherit;
 * 
 * @property string $before Sets the page-breaking behavior before an element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> page-break-before: auto|always|avoid|left|right|initial|inherit;
 * 
 * @property string $inside Sets the page-breaking behavior inside an element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> page-break-inside: auto|avoid|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_print_pageba.asp The page-break-after property.
 * @link https://www.w3schools.com/cssref/pr_print_pagebb.asp The page-break-before property.
 * @link https://www.w3schools.com/cssref/pr_print_pagebi.asp The page-break-inside property.
 */
class Breaks extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('page-break', $attrs);
        }

}
