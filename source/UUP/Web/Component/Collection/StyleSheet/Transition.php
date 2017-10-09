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
use UUP\Web\Component\Collection\StyleSheet\Transition\Timing;

/**
 * Transition CSS style.
 *
 * @property string $delay Specifies when the transition effect will start (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> transition-delay: &lt;time&gt;|initial|inherit;
 * 
 * @property string $duration Specifies how many seconds or milliseconds a transition effect 
 *      takes to complete (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> transition-duration: &lt;time&gt;|initial|inherit;
 * 
 * @property string $property Specifies the name of the CSS property the transition effect is 
 *      for (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> transition-property: none|all|&lt;property&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_transition-delay.asp The transition-delay property.
 * @link https://www.w3schools.com/cssref/css3_pr_transition-duration.asp The transition-duration property.
 * @link https://www.w3schools.com/cssref/css3_pr_transition-property.asp The transition-property property.
 */
class Transition extends PrefixedAttributeCollection
{

        /**
         * The transition timing style object.
         * @var Timing
         */
        public $timing;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('transition', $attrs);
                $this->timing = new Timing($attrs);
        }

}
