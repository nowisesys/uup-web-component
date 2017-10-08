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
 * @property string $bottom Sets all the bottom border properties in one declaration. Applies to CSS1.
 * @property string $color Sets the color of the four borders. Applies to CSS1.
 * @property string $image A shorthand property for setting all the border-image-* properties. Applies to CSS3.
 * @property string $left Sets all the left border properties in one declaration. Applies to CSS1.
 * @property string $radius A shorthand property for setting all the four border-*-radius properties. Applies to CSS3.
 * @property string $right Sets all the right border properties in one declaration. Applies to CSS1.
 * @property string $style Sets the style of the four borders. Applies to CSS1.
 * @property string $top Sets all the top border properties in one declaration. Applies to CSS1.
 * @property string $width Sets the width of the four borders. Applies to CSS1.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
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
