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

namespace UUP\Web\Component\Container\Sitemap;

/**
 * Interface for tree nodes in site map.
 * 
 * @author Anders Lövgren (Computing Department at BMC, Uppsala University)
 */
interface TreeNode
{

        /**
         * This tree node has children.
         * @return bool 
         */
        function hasChildren();

        /**
         * Get children tree nodes.
         * @return TreeNode[] 
         */
        function getChildren();

        /**
         * This tree node can be displayed.
         * @return bool 
         */
        function isDisplayable();

        /**
         * Get name of tree node.
         * @return string
         */
        function getName();

        /**
         * Get path of tree node.
         * @return string
         */
        function getPath();
        
        /**
         * Get URI location.
         */
        function getLocation();

        /**
         * Get nesting level.
         * @return int 
         */
        function getLevel();

        /**
         * Get unique ID.
         * @return string
         */
        function getID();
}
