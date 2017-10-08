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

namespace UUP\Web\Component\Collection\Properties;

use UUP\Web\Component\Collection\Base\PrefixedAttributeCollection;
use UUP\Web\Component\Collection\Properties;

/**
 * The display properties.
 * 
 * These properties controls how content are positioned inside the parent container 
 * or if it should only be shower on hover.
 * 
 * @property bool $container Container for other display classes (position: relative).
 * @property bool $topleft Displays content at the top left corner of parent container.
 * @property bool $topright Displays content at the top right corner of parent container.
 * @property bool $bottomleft Displays content at the bottom left corner of parent container.
 * @property bool $bottomright Displays content at the bottom right corner of parent container.
 * @property bool $left Displays content to the left (middle left) of parent container.
 * @property bool $right Displays content to the right (middle right) of parent container.
 * @property bool $middle Displays content in the middle (center) of parent container.
 * @property bool $topmiddle Displays content at the top middle of parent container.
 * @property bool $bottommiddle Displays content at the bottom middle of parent container.
 * @property bool $position Displays content at a specified position in parent container. Set position with (top,left) inline CSS.
 * @property bool $hover Displays content on hover inside the container.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Display extends PrefixedAttributeCollection
{

        /**
         * Constructor.
         * @param Properties $props The shadowed properties collection.
         */
        public function __construct($props)
        {
                parent::__construct('display', $props);
        }

}
