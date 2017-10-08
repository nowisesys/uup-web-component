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
 * Align CSS style.
 *
 * @property string $content Specifies the alignment between the lines inside a flexible 
 *      container when the items do not use all available space (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> align-content: stretch|center|flex-start|flex-end|space-between|space-around|initial|inherit;
 * 
 * @property string $items Specifies the alignment for items inside a flexible container 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> align-items: stretch|center|flex-start|flex-end|baseline|initial|inherit;
 * 
 * @property string $self Specifies the alignment for selected items inside a flexible 
 *      container (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> align-self: auto|stretch|center|flex-start|flex-end|baseline|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_align-content.asp The align-content property.
 * @link https://www.w3schools.com/cssref/css3_pr_align-items.asp The align-items property.
 * @link https://www.w3schools.com/cssref/css3_pr_align-self.asp The align-self property.
 */
class Align extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('align', $attrs);
        }

}
