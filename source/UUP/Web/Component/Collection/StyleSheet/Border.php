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

use UUP\Web\Component\Collection\StyleSheet\Base\VirtualCollection;

/**
 * Border CSS style.
 *
 * @property string $border Sets all the border properties in one declaration. Applies to CSS1.
 * @property string $bottom Sets all the bottom border properties in one declaration. Applies to CSS1.
 * @property string $bottomColor Sets the color of the bottom border. Applies to CSS1.
 * @property string $bottomLeftRadius Defines the shape of the border of the bottom-left corner. Applies to CSS3.
 * @property string $bottomRightRadius Defines the shape of the border of the bottom-right corner. Applies to CSS3.
 * @property string $bottomStyle Sets the style of the bottom border. Applies to CSS1.
 * @property string $bottomWidth Sets the width of the bottom border. Applies to CSS1.
 * @property string $color Sets the color of the four borders. Applies to CSS1.
 * @property string $image A shorthand property for setting all the image-* properties. Applies to CSS3.
 * @property string $imageOutset Specifies the amount by which the border image area extends beyond the border box. Applies to CSS3.
 * @property string $imageRepeat Specifies whether the border image should be repeated, rounded or stretched. Applies to CSS3.
 * @property string $imageSlice Specifies how to slice the border image. Applies to CSS3.
 * @property string $imageSource Specifies the path to the image to be used as a border. Applies to CSS3.
 * @property string $imageWidth Specifies the widths of the image-border. Applies to CSS3.
 * @property string $left Sets all the left border properties in one declaration. Applies to CSS1.
 * @property string $leftColor Sets the color of the left border. Applies to CSS1.
 * @property string $leftStyle Sets the style of the left border. Applies to CSS1.
 * @property string $leftWidth Sets the width of the left border. Applies to CSS1.
 * @property string $radius A shorthand property for setting all the four *-radius properties. Applies to CSS3.
 * @property string $right Sets all the right border properties in one declaration. Applies to CSS1.
 * @property string $rightColor Sets the color of the right border. Applies to CSS1.
 * @property string $rightStyle Sets the style of the right border. Applies to CSS1.
 * @property string $rightWidth Sets the width of the right border. Applies to CSS1.
 * @property string $style Sets the style of the four borders. Applies to CSS1.
 * @property string $top Sets all the top border properties in one declaration. Applies to CSS1.
 * @property string $topColor Sets the color of the top border. Applies to CSS1.
 * @property string $topLeftRadius Defines the shape of the border of the top-left corner. Applies to CSS3.
 * @property string $topRightRadius Defines the shape of the border of the top-right corner. Applies to CSS3.
 * @property string $topStyle Sets the style of the top border. Applies to CSS1.
 * @property string $topWidth Sets the width of the top border. Applies to CSS1.
 * @property string $width Sets the width of the four borders. Applies to CSS1.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Border extends VirtualCollection
{

        public function __construct($attrs)
        {
                parent::__construct($attrs, array(
                        'bottom'            => 'border-bottom',
                        'bottomColor'       => 'border-bottom-color',
                        'bottomLeftRadius'  => 'border-bottom-left-radius',
                        'bottomRightRadius' => 'border-bottom-right-radius',
                        'bottomStyle'       => 'border-bottom-style',
                        'bottomWidth'       => 'border-bottom-width',
                        'color'             => 'border-color',
                        'image'             => 'border-image',
                        'imageOutset'       => 'border-image-outset',
                        'imageRepeat'       => 'border-image-repeat',
                        'imageSlice'        => 'border-image-slice',
                        'imageSource'       => 'border-image-source',
                        'imageWidth'        => 'border-image-width',
                        'left'              => 'border-left',
                        'leftColor'         => 'border-left-color',
                        'leftStyle'         => 'border-left-style',
                        'leftWidth'         => 'border-left-width',
                        'radius'            => 'border-radius',
                        'right'             => 'border-right',
                        'rightColor'        => 'border-right-color',
                        'rightStyle'        => 'border-right-style',
                        'style'             => 'border-style',
                        'top'               => 'border-top',
                        'topColor'          => 'border-top-color',
                        'topLeftRadius'     => 'border-top-left-radius',
                        'topRightRadius'    => 'border-top-right-radius',
                        'topStyle'          => 'border-top-style',
                        'topWidth'          => 'border-top-width',
                        'width'             => 'border-width'
                ));
        }

}
