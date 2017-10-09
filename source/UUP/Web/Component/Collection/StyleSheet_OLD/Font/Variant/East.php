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

namespace UUP\Web\Component\Collection\StyleSheet\Font\Variant;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * Font variant east CSS style
 *
 * @property string $asian Controls the usage of alternate glyphs for East Asian 
 *      scripts (e.g Japanese and Chinese) (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font-variant-east-asian: normal|(jis78|jis83|jis90|jis04|simplified|traditional)|(full-width|proportional-width)|ruby
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/CSS/font-variant-east-asian The font-variant-east-asian property.
 */
class East extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('font-variant-east', $attrs);
        }

}
