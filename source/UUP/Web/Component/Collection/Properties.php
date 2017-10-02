<?php

/*
 * Copyright (C) 2017 Anders Lövgren (Computing Department at BMC, Uppsala University).
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

use UUP\Web\Component\Collection\Properties\Color;
use UUP\Web\Component\Collection\Properties\Hover;

/**
 * The properties collection.
 * 
 * This collection keeps attributes that is going to be transformed by the current 
 * transformer at rendering time. See it as a collection of custom HTML attributes
 * that might be processed to define HTML classes and style attributes depending on
 * the transformer possibly installed by some theme.
 * 
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 */
class Properties extends Collection
{

        /**
         * The color properties.
         * @var Color 
         */
        public $color;
        /**
         * The hover properties.
         * @var Hover 
         */
        public $hover;

        /**
         * Constructor.
         */
        public function __construct()
        {
                $this->color = new Color($this);
                $this->hover = new Hover($this);

                parent::__construct(' ', ' ', '');
        }

}
