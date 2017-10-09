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
 * @property string $bottom_color Sets the color of the bottom border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-bottom-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $bottom_style Sets the style of the bottom border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-bottom-style:none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $bottom_width Sets the width of the bottom border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-bottom-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @property string $bottom_left_radius Defines the shape of the border of the bottom-left corner (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-bottom-left-radius: &lt;length&gt;|% [&lt;length&gt;|%]|initial|inherit;
 * 
 * @property string $bottom_right_radius Defines the shape of the border of the bottom-right corner (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-bottom-right-radius: &lt;length&gt;|% [&lt;length&gt;|%]|initial|inherit;
 * 
 * @property string $left_color Sets the color of the left border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-left-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $left_style Sets the style of the left border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-left-style:none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $left_width Sets the width of the left border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-left-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @property string $right_color Sets the color of the right border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-right-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $right_style Sets the style of the right border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-right-style:none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $right_width Sets the width of the right border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-right-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @property string $top_color Sets the color of the top border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $top_style Sets the style of the top border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-style:none|hidden|dotted|dashed|solid|double|groove|ridge|inset|outset|initial|inherit;
 * 
 * @property string $top_width Sets the width of the top border (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-width: medium|thin|thick|&lt;length&gt;|initial|inherit;
 * 
 * @property string $top_left_radius Defines the shape of the border of the top-left corner (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-left-radius: &lt;length&gt;|% [&lt;length&gt;|%]|initial|inherit;
 * 
 * @property string $top_right_radius Defines the shape of the border of the top-right corner (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-top-right-radius: &lt;length&gt;|% [&lt;length&gt;|%]|initial|inherit;
 * 
 * @property string $image_outset Specifies the amount by which the border image area extends 
 *      beyond the border box (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-outset: &lt;length&gt;|&lt;number&gt;|initial|inherit;
 * 
 * @property string $image_repeat Specifies whether the border image should be repeated, rounded 
 *      or stretched (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-repeat: stretch|repeat|round|initial|inherit;
 * 
 * @property string $image_slice Specifies how to slice the border image (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-slice: &lt;number&gt;|%|fill|initial|inherit;
 * 
 * @property string $image_source Specifies the path to the image to be used as a border (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-source: none|&lt;image&gt;|initial|inherit;
 * 
 * @property string $image_width Specifies the widths of the image-border (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-width: &lt;number&gt;|%|auto|initial|inherit;
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
 * 
 * @link https://www.w3schools.com/cssref/pr_border-bottom_color.asp The border-bottom-color property.
 * @link https://www.w3schools.com/cssref/pr_border-bottom_style.asp The border-bottom-style property.
 * @link https://www.w3schools.com/cssref/pr_border-bottom_width.asp The border-bottom-width property.
 * 
 * @link https://www.w3schools.com/cssref/pr_border-left_color.asp The border-left-color property.
 * @link https://www.w3schools.com/cssref/pr_border-left_style.asp The border-left-style property.
 * @link https://www.w3schools.com/cssref/pr_border-left_width.asp The border-left-width property.
 * 
 * @link https://www.w3schools.com/cssref/pr_border-right_color.asp The border-right-color property.
 * @link https://www.w3schools.com/cssref/pr_border-right_style.asp The border-right-style property.
 * @link https://www.w3schools.com/cssref/pr_border-right_width.asp The border-right-width property.
 * 
 * @link https://www.w3schools.com/cssref/pr_border-top_color.asp The border-top-color property.
 * @link https://www.w3schools.com/cssref/pr_border-top_style.asp The border-top-style property.
 * @link https://www.w3schools.com/cssref/pr_border-top_width.asp The border-top-width property.
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_border-bottom-left-radius.asp The border-bottom-left-radius property. 
 * @link https://www.w3schools.com/cssref/css3_pr_border-bottom-right-radius.asp The border-bottom-right-radius property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-top-left-radius.asp The border-top-left-radius property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-top-right-radius.asp The border-top-right-radius property.
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-outset.asp The border-image-outset property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-repeat.asp The border-image-repeat property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-slice.asp The border-image-slice property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-source.asp The border-image-source property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-width.asp The border-image-width property.
 */
class Border extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('border', $attrs);
        }

}
