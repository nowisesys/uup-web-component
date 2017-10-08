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

namespace UUP\Web\Component\Collection\StyleSheet\Lists;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * List style CSS style.
 *
 * @property string $image Specifies an image as the list-item marker (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> list-style-image: none|&lt;url&gt;|initial|inherit;
 * 
 * @property string $position Specifies if the list-item markers should appear inside or 
 *      outside the content flow (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> list-style-position: inside|outside|initial|inherit;
 * 
 * @property string $type Specifies the type of list-item marker (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> list-style-type: disc|circle|decimal|georgian|square|none|&lt;value&gt;;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_list-style-image.asp The list-style-image property.
 * @link https://www.w3schools.com/cssref/pr_list-style-position.asp The list-style-position property.
 * @link https://www.w3schools.com/cssref/pr_list-style-type.asp The list-style-type property.
 */
class Style extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('list-style', $attrs);
        }

}
