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
use UUP\Web\Component\Collection\StyleSheet\Border\Bottom;
use UUP\Web\Component\Collection\StyleSheet\Border\Image;
use UUP\Web\Component\Collection\StyleSheet\Border\Left;
use UUP\Web\Component\Collection\StyleSheet\Border\Right;
use UUP\Web\Component\Collection\StyleSheet\Border\Top;

/**
 * Border CSS style.
 * 
 * @property string $color Sets the color of the four borders (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $image A shorthand property for setting all the border-image-* properties 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image: &lt;source&gt; &lt;slice&gt; &lt;width&gt; &lt;outset&gt; &lt;repeat&gt;|initial|inherit;
 * 
 * @property string $radius A shorthand property for setting all the four border-*-radius 
 *      properties (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-radius: 1-4 &lt;length&gt;|% / 1-4 &lt;length&gt;|%|initial|inherit;
 * 
 * @property string $style Sets the style of the four borders (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-style:none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $width Sets the width of the four borders (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @property string $left Sets all the left border properties in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-left: &lt;border-width&gt; &lt;border-style&gt; &lt;border-color&gt;|initial|inherit;
 * 
 * @property string $right Sets all the right border properties in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-right: &lt;border-width&gt; &lt;border-style&gt; &lt;border-color&gt;|initial|inherit;
 * 
 * @property string $top Sets all the top border properties in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top: &lt;border-width&gt; &lt;border-style&gt; &lt;border-color&gt;|initial|inherit;
 * 
 * @property string $bottom Sets all the bottom border properties in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-bottom: &lt;border-width&gt; &lt;border-style&gt; &lt;border-color&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_border-color.asp The border-color property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image.asp The border-image property.
 * @link https://www.w3schools.com/cssref/pr_border-style.asp The border-style property.
 * @link https://www.w3schools.com/cssref/pr_border-width.asp The border-width property.
 * 
 * @link https://www.w3schools.com/cssref/pr_border-bottom.asp The border-bottom property.
 * @link https://www.w3schools.com/cssref/pr_border-left.asp The border-left property.
 * @link https://www.w3schools.com/cssref/pr_border-right.asp The border-right property.
 * @link https://www.w3schools.com/cssref/pr_border-top.asp The border-top property.
 */
class Border extends PrefixedAttributeCollection
{

        /**
         * The border image style object.
         * @var Image 
         */
        public $image;
        /**
         * The border bottom style object.
         * @var Bottom 
         */
        public $bottom;
        /**
         * The border left style object.
         * @var Left 
         */
        public $left;
        /**
         * The border right style object.
         * @var Right 
         */
        public $right;
        /**
         * The border top style object.
         * @var Top 
         */
        public $top;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('border', $attrs);

                $this->image = new Image($attrs);
                $this->bottom = new Bottom($attrs);
                $this->left = new Left($attrs);
                $this->right = new Right($attrs);
                $this->top = new Top($attrs);
        }

}
