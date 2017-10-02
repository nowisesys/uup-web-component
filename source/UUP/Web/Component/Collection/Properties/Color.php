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

namespace UUP\Web\Component\Collection\Properties;

/**
 * The color properties.
 * 
 * @property string $back The background color.
 * @property string $text The text color.
 *
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 */
class Color extends Virtual
{

        public function __construct($props)
        {
                parent::__construct('color', $props);
        }

}
