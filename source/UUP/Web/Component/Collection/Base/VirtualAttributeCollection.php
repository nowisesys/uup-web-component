<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Nowise Systems).
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

namespace UUP\Web\Component\Collection\Base;

/**
 * Virtual attribute collection.
 * 
 * Support constructing chains of attribute property nodes. For each tree node, __get() 
 * is called to create the node. The node is finally assigned from __set() using the
 * derived path as key: $n1->n2->n3 => n1-n2-n3.
 *
 * @author Anders Lövgren (Nowise Systems)
 * @package UUP
 * @subpackage Web Components
 */
class VirtualAttributeCollection
{

        /**
         * The prefix string (i.e. color).
         * @var string 
         */
        private $_prefix;
        /**
         * The shadowed collection.
         * @var Collection 
         */
        private $_props;

        /**
         * Constructor.
         * @param string $prefix The prefix string (i.e. color).
         * @param Collection $props The shadowed collection.
         */
        public function __construct($prefix, $props)
        {
                $this->_prefix = $prefix;
                $this->_props = $props;
        }

        public function __get($name)
        {
                return new VirtualAttributeCollection(sprintf("%s-%s", $this->_prefix, $name), $this->_props);
        }

        public function __set($name, $value)
        {
                $this->_props->set(sprintf("%s-%s", $this->_prefix, $name), $value);
        }

}
