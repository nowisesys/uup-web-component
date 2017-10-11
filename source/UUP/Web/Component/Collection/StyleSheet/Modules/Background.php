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

namespace UUP\Web\Component\Collection\StyleSheet\Modules;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet;

/**
 * Background CSS style.
 * 
 * @property string $attachment Sets whether a background image is fixed or scrolls with the 
 *      rest of the page (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-attachment: scroll|fixed|local|initial|inherit;
 * 
 * @property string $color Specifies the background color of an element
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-color: &lt;color&gt;|transparent|initial|inherit;
 * 
 * @property string $image Specifies one or more background images for an element
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-clip: border-box|padding-box|content-box|initial|inherit;
 * 
 * @property string $position Specifies the position of a background image
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-position: (left|right|center top|center|bottom)|x% y%|xpos ypos|initial|inherit;
 * 
 * @property string $repeat Sets how a background image will be repeated
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-repeat: repeat|repeat-x|repeat-y|no-repeat|initial|inherit;
 * 
 * @property string $clip Specifies the painting area of the background 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-clip: border-box|padding-box|content-box|initial|inherit;
 * 
 * @property string $origin Specifies where the background image(s) is/are positioned
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-origin: padding-box|border-box|content-box|initial|inherit;
 * 
 * @property string $size Specifies the size of the background image(s)
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-size: auto|&lt;length&gt;|cover|contain|initial|inherit;
 * 
 * @property string $blend_mode Specifies the blending mode of each background layer 
 *      (color/image, since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background-blend-mode: normal|multiply|screen|overlay|darken|lighten|color-dodge|saturation|color|luminosity;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_background.asp The background property.
 * @link https://www.w3schools.com/cssref/pr_background-attachment.asp The background-attachment property.
 * @link https://www.w3schools.com/cssref/css3_pr_background-clip.asp The background-clip property.
 * @link https://www.w3schools.com/cssref/css3_pr_background-color.asp The background-color property.
 * @link https://www.w3schools.com/cssref/css3_pr_background-image.asp The background-image property.
 * @link https://www.w3schools.com/cssref/css3_pr_background-origin.asp The background-origin property.
 * @link https://www.w3schools.com/cssref/css3_pr_background-position.asp The background-position property.
 * @link https://www.w3schools.com/cssref/css3_pr_background-repeat.asp The background-repeat property.
 * @link https://www.w3schools.com/cssref/css3_pr_background-size.asp The background-size property.
 * @link https://www.w3schools.com/cssref/pr_background-blend-mode.asp The background-blend-mode property.
 */
class Background extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('background', $attrs);
        }

}
