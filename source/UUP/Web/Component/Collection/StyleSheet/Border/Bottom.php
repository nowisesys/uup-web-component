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
use UUP\Web\Component\Collection\StyleSheet\Border\Bottom\Left;
use UUP\Web\Component\Collection\StyleSheet\Border\Bottom\Right;

/**
 * Border bottom CSS style.
 * 
 * @property string $color Sets the color of the bottom border. Applies to CSS1.
 * @property string $style Sets the style of the bottom border. Applies to CSS1.
 * @property string $width Sets the width of the bottom border. Applies to CSS1.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Bottom extends PrefixedAttributeCollection
{

        /**
         * The border bottom left style object.
         * @var Left 
         */
        public $left;
        /**
         * The border bottom right style object.
         * @var Right 
         */
        public $right;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('border-bottom', $attrs);

                $this->left = new Left($attrs);
                $this->right = new Right($attrs);
        }

}
