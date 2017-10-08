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
use UUP\Web\Component\Collection\StyleSheet\Lists\Style;

/**
 * List CSS style.
 * 
 * @property string $style Sets all the properties for a list in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> list-style: &lt;list-style-type&gt; &lt;list-style-position&gt; &lt;list-style-image&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_list-style.asp The list-style property.
 */
class Lists extends PrefixedAttributeCollection
{

        /**
         * The list style object.
         * @var Style 
         */
        public $style;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('list', $attrs);
                $this->style = new Style($attrs);
        }

}
