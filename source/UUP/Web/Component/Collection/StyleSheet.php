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

use UUP\Web\Component\Collection\StyleSheet\Modules;

/**
 * The stylesheet attribute collection.
 * 
 * @property string $animation A shorthand property for all the animation properties (except 
 *      animation-play-state and animation-fill-mode).
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      animation: &lt;name&gt; &lt;duration&gt; &lt;timing-function&gt; &lt;delay&gt; &lt;iteration-count&gt; &lt;direction&gt; &lt;fill-mode&gt; &lt;play-state&gt;;
 *      </p>
 *      <p><b>Example:</b> 
 *      animation: mymove 5s infinite;
 *      <br>
 *      <b>Defines:</b> 
 *      The 'Animation' module.
 *      </p>
 * 
 * @property string $background A shorthand property for setting all the background properties 
 *      in one declaration.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      background: &lt;background-color&gt; &lt;background-image&gt; &lt;position&gt;/&lt;background-size&gt; &lt;background-repeat&gt; &lt;background-origin&gt; &lt;background-clip&gt; &lt;background-attachment&gt; initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      background: #00ff00 url("smiley.gif") no-repeat fixed center; 
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $border Sets all the border properties in one declaration.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      border: &lt;border-width&gt; &lt;border-style&gt; &lt;border-color&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      border: 5px solid red;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $bottom Specifies the bottom position of a positioned element.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      bottom: auto|&lt;length&gt;(px|cm|mm|%)|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      bottom: 70px;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $clear Specifies which sides of an element where other floating 
 *      elements are not allowed.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      clear: none|left|right|both|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      clear: both;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $clip Clips an absolutely positioned element.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      clip: auto|rect(top, right, bottom, left)|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      clip: rect(0px,60px,200px,0px);
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $color Sets the color of text.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      color: &lt;color&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      color: rgb(0,0,255);
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $columns A shorthand property for setting column-width and column-count.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      columns: auto|&lt;column-width&gt; &lt;column-count&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      columns: 100px 3;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $content Used with the :before and :after pseudo-elements, to insert generated content.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      content: normal|none|counter|attr|&lt;string&gt;|open-quote|close-quote|no-open-quote|no-close-quote|&lt;url&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      content: " (" attr(href) ")";
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $cursor Specifies the type of cursor to be displayed.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      cursor: auto|copy|crosshair|default|grab|help|move|no-drop|pointer|progress|wait|&lt;value&gt;;
 *      </p>
 *      <p><b>Example:</b> 
 *      cursor: crosshair;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $direction Specifies the text direction/writing direction.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      direction: ltr|rtl|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      direction: rtl;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 *  
 * @property string $display Specifies how a certain HTML element should be displayed.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      display: block|inline|inline-block|flex|none|&lt;value&gt;;
 *      </p>
 *      <p><b>Example:</b> 
 *      display: inline;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $filter Defines effects (e.g. blurring or color shifting) on an element before the element is displayed.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      filter: none|blur(px)|brightness(%)|contrast(%)|drop-shadow(&lt;h-shadow&gt; &lt;v-shadow&gt;...)|grayscale(%)|hue-rotate(deg)|invert(%)|opacity(%)|saturate(%)|sepia(%)|url();
 *      </p>
 *      <p><b>Example:</b> 
 *      filter: opacity(30%);
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $flex Specifies the length of the item, relative to the rest.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      flex: &lt;flex-grow&gt; &lt;flex-shrink&gt; &lt;flex-basis&gt;|auto|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      flex: 1;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $float Specifies whether or not a box should float.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      float: none|left|right|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      float: right;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $font Sets all the font properties in one declaration.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      font: &lt;font-style&gt; &lt;font-variant&gt; &lt;font-weight&gt; &lt;font-size&gt;/&lt;line-height&gt; &lt;font-family&gt;|caption|icon|menu|message-box|small-caption|status-bar|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      font: italic bold 12px/30px Georgia, serif;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $height Sets the height of an element.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      height: auto|&lt;length&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      height: 100px;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $left Specifies the left position of a positioned element.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      left: auto|&lt;length&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      left: 80px;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $margin Sets all the margin properties in one declaration.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      margin: &lt;length&gt;|auto|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      margin: 2cm 4cm 3cm 4cm;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $opacity Sets the opacity level for an element.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      opacity: &lt;number&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      opacity: 0.5;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $order Sets the order of the flexible item, relative to the rest.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      order: &lt;number&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      order: 4;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $outline Sets all the outline properties in one declaration.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      outline: &lt;outline-color&gt; &lt;outline-style&gt; &lt;outline-width&lt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      outline: #00FF00 dotted thick;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $overflow Specifies what happens if content overflows an element's box.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      overflow: visible|hidden|scroll|auto|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      overflow: scroll;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $padding Sets all the padding properties in one declaration.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      padding: &lt;length&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      padding: 2cm 4cm 3cm 4cm;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $perspective Specifies the perspective on how CSS3D elements are viewed.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      perspective: &lt;length&gt;|none;
 *      </p>
 *      <p><b>Example:</b> 
 *      perspective: 500px;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $position Specifies the type of positioning method used for an element (static, relative, absolute or fixed).
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      position: static|absolute|fixed|relative|sticky|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      position: absolute;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $quotes Sets the type of quotation marks for embedded quotations.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      quotes: none|&lt;string&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      quotes: "\00ab" "\00bb";
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $resize Specifies whether or not an element is resizable by the user.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      resize: none|both|horizontal|vertical|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      resize: both;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $right Specifies the right position of a positioned element.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      right: auto|&lt;length&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      right: 20px;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $top Specifies the top position of a positioned element.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      top: auto|&lt;length&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      top: 80px;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $transform Applies a CSS2D or CSS3D transformation to an element.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      transform: none|&lt;transform-functions&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      transform: rotate(7deg);
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $transition A shorthand property for setting the four transition properties.
 *      <p><b>CSS Syntax (CSS3)</b><br>
 *      transition: &lt;property&gt; &lt;duration&gt; &lt;timing-function&gt; &lt;delay&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      transition: width 2s;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $visibility Specifies whether or not an element is visible.
 *      <p><b>CSS Syntax (CSS2)</b><br>
 *      visibility: visible|hidden|collapse|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      visibility: hidden;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
 * 
 * @property string $width Sets the width of an element.
 *      <p><b>CSS Syntax (CSS1)</b><br>
 *      width: auto|&lt;value&gt;|initial|inherit;
 *      </p>
 *      <p><b>Example:</b> 
 *      width: 100px;
 *      <br>
 *      <b>Defines:</b> 
 *      The '' module.
 *      </p>
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
 * @link https://www.w3schools.com/cssref/css3_pr_opacity.asp The opacity property.
 * @link https://www.w3schools.com/cssref/css3_pr_order.asp The order property.
 * @link https://www.w3schools.com/cssref/pr_outline.asp The outline property.
 * @link https://www.w3schools.com/cssref/pr_pos_overflow.asp The overflow property.
 * @link https://www.w3schools.com/cssref/pr_padding.asp The padding property.
 * @link https://www.w3schools.com/cssref/css3_pr_perspective.asp The perspective property.
 * @link https://www.w3schools.com/cssref/pr_class_position.asp The position property.
 * @link https://www.w3schools.com/cssref/pr_gen_quotes.asp The quotes property.
 * @link https://www.w3schools.com/cssref/css3_pr_resize.asp The resize property.
 * @link https://www.w3schools.com/cssref/pr_pos_right.asp The right property.
 * @link https://www.w3schools.com/cssref/pr_pos_top.asp The top property.
 * @link https://www.w3schools.com/cssref/css3_pr_transform.asp The transform property.
 * @link https://www.w3schools.com/cssref/css3_pr_transition.asp The transition property.
 * @link https://www.w3schools.com/cssref/pr_class_visibility.asp The visibility property.
 * @link https://www.w3schools.com/cssref/pr_dim_width.asp The width property.
 */
class StyleSheet extends Collection
{

        /**
         * The CSS modules.
         * @var Modules 
         */
        public $modules;

        /**
         * Constructor.
         */
        public function __construct()
        {
                parent::__construct(';', ':', '');
                $this->modules = new Modules($this);
        }

}
