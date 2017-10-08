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

namespace UUP\Web\Component\Collection;

use UUP\Web\Component\Collection\Base\ClusterAttributeCollection;
use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\StyleSheet\Align;
use UUP\Web\Component\Collection\StyleSheet\Animation;
use UUP\Web\Component\Collection\StyleSheet\Backface;
use UUP\Web\Component\Collection\StyleSheet\Background;
use UUP\Web\Component\Collection\StyleSheet\Base\Repository;
use UUP\Web\Component\Collection\StyleSheet\Border;
use UUP\Web\Component\Collection\StyleSheet\Box;
use UUP\Web\Component\Collection\StyleSheet\Caption;
use UUP\Web\Component\Collection\StyleSheet\Caret;
use UUP\Web\Component\Collection\StyleSheet\Column;
use UUP\Web\Component\Collection\StyleSheet\Counter;

/**
 * The stylesheet attribute collection.
 * 
 * @property-read Align $align The align style object.
 * @property-read Animation $animation The animation style object.
 * @property-read Backface $backface The backface style object.
 * @property-read Background $background The background style object.
 * @property-read Border $border The border style object.
 * @property-read Box $box The box style object.
 * @property-read Caption $caption The caption style object.
 * @property-read Caret $caret The caret style object.
 * @property-read Column $column The column style object.
 * @property-read Counter $counter The counter style object.
 * 
 * @property string $animation A shorthand property for all the animation properties (except 
 *      animation-play-state and animation-fill-mode) (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation: &lt;name&gt; &lt;duration&gt; &lt;timing-function&gt; &lt;delay&gt; &lt;iteration-count&gt; &lt;direction&gt; &lt;fill-mode&gt; &lt;play-state&gt;;
 * 
 * @property string $background A shorthand property for setting all the background properties 
 *      in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background: &lt;background-color&gt; &lt;background-image&gt; &lt;position&gt;/&lt;background-size&gt; &lt;background-repeat&gt; &lt;background-origin&gt; &lt;background-clip&gt; &lt;background-attachment&gt; initial|inherit;
 * 
 * @property string $bottom Specifies the bottom position of a positioned element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> bottom: auto|&lt;length&gt;(px|cm|mm|%)|initial|inherit;
 * 
 * @property string $clear Specifies which sides of an element where other floating 
 *      elements are not allowed (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> clear: none|left|right|both|initial|inherit;
 * 
 * @property string $clip Clips an absolutely positioned element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> clip: auto|rect(top, right, bottom, left)|initial|inherit;
 * 
 * @property string $color Sets the color of text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> color: &lt;color&gt;|initial|inherit;
 * 
 * @property string $columns A shorthand property for setting column-width and column-count
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> columns: auto|&lt;column-width&gt; &lt;column-count&gt;|initial|inherit;
 * 
 * @property string $content Used with the :before and :after pseudo-elements, to insert 
 *      generated content (since CSS2). <br><br>
 *      <b>CSS Syntax</b>
 *      <br> content: normal|none|counter|attr|&lt;string&gt;|open-quote|close-quote|no-open-quote|no-close-quote|&lt;url&gt;|initial|inherit;
 * 
 * @property string $opacity Sets the opacity level for an element (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> opacity: &lt;number&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/css3_pr_animation.asp The animation property.
 * @link https://www.w3schools.com/cssref/css3_pr_background.asp The background property.
 * @link https://www.w3schools.com/cssref/pr_border.asp The border property.
 * @link https://www.w3schools.com/cssref/pr_pos_bottom.asp The bottom property.
 * @link https://www.w3schools.com/cssref/pr_class_clear.asp The clear proprty.
 * @link https://www.w3schools.com/cssref/pr_pos_clip.asp The clip property.
 * @link https://www.w3schools.com/cssref/pr_text_color.asp The color property.
 * @link https://www.w3schools.com/cssref/css3_pr_columns.asp The columns property.
 * @link https://www.w3schools.com/cssref/pr_gen_content.asp The content property.
 */
class StyleSheet extends Collection
{

        /**
         * Sub collection repository.
         * @var Repository 
         */
        private $_virtual;

        /**
         * Constructor.
         */
        public function __construct()
        {
                parent::__construct(';', ':', '');
                $this->_virtual = new Repository($this);
        }

        public function __get($key)
        {
                if (($cluster = $this->_virtual->get($key))) {
                        return $cluster;
                } else {
                        return parent::get($key);
                }
        }

        public function __set($key, $val)
        {
                if (!is_object($val)) {
                        parent::set($key, $val);
                }
        }

        /**
         * Get value from sub collection.
         * 
         * Return style value if exist or false if missing.
         * 
         * @param string $key The sub collection name.
         * @return mixed
         */
        public function property($key)
        {
                return parent::get($key);
        }

        /**
         * Get named property collection.
         * 
         * Return sub collection if exist or false if missing. This differs from
         * the magic get behavior that will create an empty collection for this key if 
         * its missing.
         * 
         * @param string $key The sub collection name.
         * @return ClusterAttributeCollection|PrefixedAttributeCollection
         */
        public function collection($key)
        {
                if ($this->_virtual->has($key)) {
                        return $this->_virtual->get($key);
                }
        }

}
