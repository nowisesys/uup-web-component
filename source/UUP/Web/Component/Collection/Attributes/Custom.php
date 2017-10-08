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

namespace UUP\Web\Component\Collection\Attributes;

use UUP\Web\Component\Collection\Attributes;
use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;

/**
 * Custom data attributes.
 * 
 * Prefixed attribute collection for data-* attributes. Commonly accessable using the 
 * dataset collection thru javascript.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 * 
 * @link https://developer.mozilla.org/en-US/docs/Web/API/HTMLElement/dataset
 */
class Custom extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param Attributes $attrs The shadowed attributes collection.
         */
        public function __construct($attrs)
        {
                parent::__construct('data', $attrs);
        }

}
