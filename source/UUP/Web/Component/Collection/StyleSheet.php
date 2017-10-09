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
use UUP\Web\Component\Collection\StyleSheet\Emptys;
use UUP\Web\Component\Collection\StyleSheet\Flex;
use UUP\Web\Component\Collection\StyleSheet\Font;
use UUP\Web\Component\Collection\StyleSheet\Hanging;
use UUP\Web\Component\Collection\StyleSheet\Justify;
use UUP\Web\Component\Collection\StyleSheet\Letter;
use UUP\Web\Component\Collection\StyleSheet\Line;
use UUP\Web\Component\Collection\StyleSheet\Lists;
use UUP\Web\Component\Collection\StyleSheet\Margin;
use UUP\Web\Component\Collection\StyleSheet\Max;
use UUP\Web\Component\Collection\StyleSheet\Min;
use UUP\Web\Component\Collection\StyleSheet\Outline;

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
 * @property-read Emptys $empty The empty style object.
 * @property-read Flex $flex The flex style object.
 * @property-read Font $font The font style object.
 * @property-read Hanging $hanging The hanging style object.
 * @property-read Justify $justify The justify style object.
 * @property-read Letter $letter The letter style object.
 * @property-read Line $line The line style object.
 * @property-read Lists $list The list style object.
 * @property-read Margin $margin The margin style object.
 * @property-read Max $max The max style object.
 * @property-read Min $min The min style object.
 * @property-read Outline $outline The outline style object.
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
 * @property string $cursor Specifies the type of cursor to be displayed (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> cursor: auto|copy|crosshair|default|grab|help|move|no-drop|pointer|progress|wait|&lt;value&gt;;
 * 
 * @property string $direction Specifies the text direction/writing direction (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> direction: ltr|rtl|initial|inherit;
 *  
 * @property string $display Specifies how a certain HTML element should be displayed 
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> display: block|inline|inline-block|flex|none|&lt;value&gt;;
 * 
 * @property string $filter Defines effects (e.g. blurring or color shifting) on an element 
 *      before the element is displayed (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> filter: none|blur(px)|brightness(%)|contrast(%)|drop-shadow(&lt;h-shadow&gt; &lt;v-shadow&gt;...)|grayscale(%)|hue-rotate(deg)|invert(%)|opacity(%)|saturate(%)|sepia(%)|url();
 * 
 * @property string $flex Specifies the length of the item, relative to the rest (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> flex: &lt;flex-grow&gt; &lt;flex-shrink&gt; &lt;flex-basis&gt;|auto|initial|inherit;
 * 
 * @property string $float Specifies whether or not a box should float (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> float: none|left|right|initial|inherit;
 * 
 * @property string $font Sets all the font properties in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> font: &lt;font-style&gt; &lt;font-variant&gt; &lt;font-weight&gt; &lt;font-size&gt;/&lt;line-height&gt; &lt;font-family&gt;|caption|icon|menu|message-box|small-caption|status-bar|initial|inherit;
 * 
 * @property string $height Sets the height of an element (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> height: auto|&lt;length&gt;|initial|inherit;
 * 
 * @property string $left Specifies the left position of a positioned element (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> left: auto|&lt;length&gt;|initial|inherit;
 * 
 * @property string $margin Sets all the margin properties in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> margin: &lt;length&gt;|auto|initial|inherit;
 * 
 * @property string $opacity Sets the opacity level for an element (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> opacity: &lt;number&gt;|initial|inherit;
 * 
 * @property string $order Sets the order of the flexible item, relative to the rest 
 *      (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> order: &lt;number&gt;|initial|inherit;
 * 
 * @property string $outline Sets all the outline properties in one declaration (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> outline: &lt;outline-color&gt; &lt;outline-style&gt; &lt;outline-width&lt;|initial|inherit;
 * 
 * @property string $overflow Specifies what happens if content overflows an element's box 
 *      (since CSS2).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> overflow: visible|hidden|scroll|auto|initial|inherit;
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
 * @link https://www.w3schools.com/cssref/pr_class_cursor.asp The cursor property.
 * @link https://www.w3schools.com/cssref/pr_text_direction.asp The direction property.
 * @link https://www.w3schools.com/cssref/css3_pr_filter.asp The filter property.
 * @link https://www.w3schools.com/cssref/css3_pr_flex.asp The flex property.
 * @link https://www.w3schools.com/cssref/pr_class_float.asp The float property.
 * @link https://www.w3schools.com/cssref/pr_font_font.asp The font property.
 * @link https://www.w3schools.com/cssref/pr_dim_height.asp The height property.
 * @link https://www.w3schools.com/cssref/pr_pos_left.asp The left property.
 * @link https://www.w3schools.com/cssref/pr_margin.asp The margin property.
 * @link https://www.w3schools.com/cssref/css3_pr_order.asp The order property.
 * @link https://www.w3schools.com/cssref/pr_outline.asp The outline property.
 * @link https://www.w3schools.com/cssref/pr_pos_overflow.asp The overflow property.
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
