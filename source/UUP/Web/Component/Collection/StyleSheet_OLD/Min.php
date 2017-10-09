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
 * Min CSS style.
 *
 * @property string $height Sets the minimum height of an element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> min-height: none|&lt;length&gt;|initial|inherit;
 * @property string $width Sets the minimum width of an element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> min-width: none|&lt;length&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_dim_min-height.asp The min-height property.
 * @link https://www.w3schools.com/cssref/pr_dim_min-height.asp The min-width property.
 */
class Min extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('min', $attrs);
        }

}
