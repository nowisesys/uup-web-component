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
use UUP\Web\Component\Collection\StyleSheet\Box\Decoration;

/**
 * Box CSS style.
 * 
 * @property string $shadow Attaches one or more drop-shadows to the box (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> box-shadow: none|&lt;h-shadow&gt; &lt;v-shadow&gt; &lt;blur&gt; &lt;spread&gt; &lt;color&gt; |inset|initial|inherit;
 * 
 * @property string $sizing Tells the browser what the sizing properties (width and height) should 
 *      include (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> box-sizing: content-box|border-box|initial|inherit;
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_box-shadow.asp The box-shadow property.
 * @link https://www.w3schools.com/cssref/css3_pr_box-sizing.asp The box-sizing property.
 */
class Box extends PrefixedAttributeCollection
{

        /**
         * The box decoration style object.
         * @var Decoration 
         */
        public $decoration;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('box', $attrs);
                $this->decoration = new Decoration($attrs);
        }

}
