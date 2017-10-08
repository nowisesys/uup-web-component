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

namespace UUP\Web\Component\Collection\StyleSheet\Border;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;
use UUP\Web\Component\Collection\StyleSheet\Border\Top\Left;
use UUP\Web\Component\Collection\StyleSheet\Border\Top\Right;

/**
 * Border top CSS style.
 * 
 * @property string $color Sets the color of the top border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $style Sets the style of the top border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-style:none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $width Sets the width of the top border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_border-top_color.asp The border-top-color property.
 * @link https://www.w3schools.com/cssref/pr_border-top_style.asp The border-top-style property.
 * @link https://www.w3schools.com/cssref/pr_border-top_width.asp The border-top-width property.
 */
class Top extends PrefixedAttributeCollection
{

        /**
         * The border top left style object.
         * @var Left 
         */
        public $left;
        /**
         * The border top right style object.
         * @var Right 
         */
        public $right;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('border-top', $attrs);

                $this->left = new Left($attrs);
                $this->right = new Right($attrs);
        }

}
