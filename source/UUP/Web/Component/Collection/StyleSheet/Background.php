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
use UUP\Web\Component\Collection\StyleSheet\Background\Blend;

/**
 * Background CSS style.
 * 
 * @property Blend $blend The blend style object.
 * 
 * @property string $background A shorthand property for setting all the background properties in one declaration. Applies to CSS1.
 * @property string $attachment Sets whether a background image is fixed or scrolls with the rest of the page. Applies to CSS1.
 * @property string $color Specifies the background color of an element. Applies to CSS1.
 * @property string $image Specifies one or more background images for an element. Applies to CSS1.
 * @property string $position Specifies the position of a background image. Applies to CSS1.
 * @property string $repeat Sets how a background image will be repeated. Applies to CSS1.
 * @property string $clip Specifies the painting area of the background. Applies to CSS3.
 * @property string $origin Specifies where the background image(s) is/are positioned. Applies to CSS3.
 * @property string $size Specifies the size of the background image(s). Applies to CSS3.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Background extends PrefixedAttributeCollection
{

        /**
         * The background blend object.
         * @var Blend 
         */
        public $blend;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('background', $attrs);
                $this->blend = new Blend($attrs);
        }

}
