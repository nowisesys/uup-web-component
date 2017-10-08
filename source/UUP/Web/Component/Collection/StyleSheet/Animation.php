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
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Animation extends PrefixedAttributeCollection
{

        /**
         * The animation fill object.
         * @var Fill 
         */
        public $fill;
        /**
         * The animation iteration object.
         * @var Iteration 
         */
        public $iteration;
        /**
         * The animation play object.
         * @var Play
         */
        public $play;
        /**
         * The animation timing object.
         * @var Timing 
         */
        public $timing;

        /**
         * Constructor.
         * @param StyleSheet $attrs The stylesheet collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('animation', $attrs);

                $this->fill = new Fill($attrs);
                $this->iteration = New Iteration($attrs);
                $this->play = new Play($attrs);
                $this->timing = New Timing($attrs);
        }

}
