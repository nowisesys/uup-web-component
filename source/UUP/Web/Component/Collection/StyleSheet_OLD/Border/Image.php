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

/**
 * Border image CSS style.
 *
 * @property string $outset Specifies the amount by which the border image area extends 
 *      beyond the border box (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-outset: &lt;length&gt;|&lt;number&gt;|initial|inherit;
 * 
 * @property string $repeat Specifies whether the border image should be repeated, rounded 
 *      or stretched (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-repeat: stretch|repeat|round|initial|inherit;
 * 
 * @property string $slice Specifies how to slice the border image (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-slice: &lt;number&gt;|%|fill|initial|inherit;
 * 
 * @property string $source Specifies the path to the image to be used as a border (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-source: none|&lt;image&gt;|initial|inherit;
 * 
 * @property string $width Specifies the widths of the image-border (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-image-width: &lt;number&gt;|%|auto|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-outset.asp The border-image-outset property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-repeat.asp The border-image-repeat property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-slice.asp The border-image-slice property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-source.asp The border-image-source property.
 * @link https://www.w3schools.com/cssref/css3_pr_border-image-width.asp The border-image-width property.
 */
class Image extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('border-image', $attrs);
        }

}
