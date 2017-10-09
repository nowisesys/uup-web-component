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
 * Transform CSS style.
 *
 * @property string $origin Allows you to change the position on transformed elements 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> transform-origin: &lt;x-axis&gt; &lt;y-axis&gt; &lt;z-axis&gt;|initial|inherit;
 * 
 * @property string $style Specifies how nested elements are rendered in CSS3D space 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> transform-style: flat|preserve-3d|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_transform-origin.asp The transform-origin property.
 * @link https://www.w3schools.com/cssref/css3_pr_transform-style.asp The transform-style property.
 */
class Transform extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('transform', $attrs);
        }

}
