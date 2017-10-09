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
use UUP\Web\Component\Collection\StyleSheet\Base\Repository;

/**
 * The stylesheet attribute collection.
 * 
 * @property-read Align $align The align style object.
 * @property-read Animation $animation The animation style object.
 * 
 * @property string $animation A shorthand property for all the animation properties (except 
 *      animation-play-state and animation-fill-mode) (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> animation: &lt;name&gt; &lt;duration&gt; &lt;timing-function&gt; &lt;delay&gt; &lt;iteration-count&gt; &lt;direction&gt; &lt;fill-mode&gt; &lt;play-state&gt;;
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
