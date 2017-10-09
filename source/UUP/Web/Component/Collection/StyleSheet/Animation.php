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
use UUP\Web\Component\Collection\StyleSheet\Animation\Fill;
use UUP\Web\Component\Collection\StyleSheet\Animation\Iteration;
use UUP\Web\Component\Collection\StyleSheet\Animation\Play;
use UUP\Web\Component\Collection\StyleSheet\Animation\Timing;

/**
 * Animation CSS style.
 * 
 * @property string $delay Specifies a delay for the start of an animation (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-delay: &lt;time&gt;|initial|inherit;
 * 
 * @property string $direction Specifies whether or not the animation should play in reverse 
 *      on alternate cycles (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-direction: normal|reverse|alternate|alternate-reverse|initial|inherit;
 * 
 * @property string $duration Specifies how many seconds or milliseconds an animation takes 
 *      to complete one cycle (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-duration: &lt;time&gt;|initial|inherit;
 * 
 * @property string $name Specifies the name of the @keyframes animation (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-name: &lt;keyframename&gt;|none|initial|inherit;
 * 
 * @property string $fill_mode Specifies a style for the element when the 
 *      animation is not playing (when it is finished, or when it has a delay) 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-fill-mode: none|forwards|backwards|both|initial|inherit;
 * 
 * @property string $iteration_count Specifies the number of times an animation 
 *      should be played (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-iteration-count: &lt;number$gt;|infinite|initial|inherit;
 * 
 * @property string $play_state Specifies whether the animation is running or 
 *      paused (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-play-state: paused|running|initial|inherit;
 * 
 * @property string $timing_function Specifies the speed curve of an animation 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation-timing-function: linear|ease|ease-in|ease-out|ease-in-out|step-start|step-end|steps(int,start|end)|cubic-bezier(n,n,n,n)|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_animation-delay.asp The animation-delay property.
 * @link https://www.w3schools.com/cssref/css3_pr_animation-direction.asp The animation direction property.
 * @link https://www.w3schools.com/cssref/css3_pr_animation-duration.asp The animation-duration property.
 * @link https://www.w3schools.com/cssref/css3_pr_animation-name.asp The animation-name property.
 * @link https://www.w3schools.com/cssref/css3_pr_animation-fill-mode.asp The animation-fill-mode property.
 * @link https://www.w3schools.com/cssref/css3_pr_animation-iteration-count.asp The animation-iteration-count property.
 * @link https://www.w3schools.com/cssref/css3_pr_animation-play-state.asp The animation-play-state property.
 * @link https://www.w3schools.com/cssref/css3_pr_animation-timing-function.asp The animation-timing-function property.
 */
class Animation extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('animation', $attrs);
        }

}
