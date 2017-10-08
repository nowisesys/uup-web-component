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
use UUP\Web\Component\Collection\StyleSheet\Background;
use UUP\Web\Component\Collection\StyleSheet\Base\Repository;
use UUP\Web\Component\Collection\StyleSheet\Border;

/**
 * The stylesheet attribute collection.
 * 
 * @property-read Align $align The align style object.
 * @property-read Background $background The background style object.
 * @property-read Border $border The border style object.
 * 
 * @property string $background A shorthand property for setting all the background properties 
 *      in one declaration (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> background: &lt;background-color&gt; &lt;background-image&gt; &lt;position&gt;/&lt;background-size&gt; &lt;background-repeat&gt; &lt;background-origin&gt; &lt;background-clip&gt; &lt;background-attachment&gt; initial|inherit;
 * 
 * @property string $bottom Sets all the bottom border properties in one declaration 
 *      (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> border-bottom: &lt;border-width&gt; &lt;border-style&gt; &lt;border-color&gt;|initial|inherit;
 * 
 * @property string $color Sets the color of text (since CSS1).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> color: &lt;color&gt;|initial|inherit;
 * 
 * @property string $opacity Sets the opacity level for an element (since CSS3).<br><br>
 *      <b>CSS Syntax</b>
 *      <br> opacity: &lt;number&gt;|initial|inherit;
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://www.w3schools.com/cssref/pr_border.asp The border property.
 * @link https://www.w3schools.com/cssref/css3_pr_background.asp The background property.
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
