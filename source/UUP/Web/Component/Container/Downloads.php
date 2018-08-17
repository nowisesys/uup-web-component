<?php

/*
 * Copyright (C) 2018 Anders Lövgren (Nowise Systems).
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

namespace UUP\Web\Component\Container;

use UUP\Web\Component\Container;

/**
 * Download aggregator component.
 * 
 * Provides unified user experience for downloading files from project using the 
 * standard directory layout:
 * 
 * <pre>
 * proj/
 *   +-- stable/        // <-- Release versions
 *   +-- testing/       // <-- Release candidates (SVN trunk/GIT master)
 *   +-- binary/        // <-- Compiled programs
 *   +-- patch/         // <-- Quick fixes (unified diff)
 * </pre>
 *
 * Add location or download component, then call render to have all rendered at once with
 * unified download information (guidelines). The guideline is automatic derived based on
 * download components, but can be overridden.
 * 
 * <code>
 * $downloads = new Downloads();
 * $downloads->addLocation("stable");
 * $downloads->addLocation("binary", _("Binaries"), array("jar", "exe"));
 * </code>
 * 
 * @author Anders Lövgren (Nowise Systems)
 */
class Downloads extends Container
{

        /**
         * Unique ID for download list.
         * @var string 
         */
        public $id;
        /**
         * The array of download objects.
         * @var array 
         */
        public $renderable;
        /**
         * Guideline text for end users.
         * @var string 
         */
        public $guideline;
        /**
         * The number of instances.
         * @var int 
         */
        private static $instances = 0;

        /**
         * Constructor.
         * @param string $path The template path (optional).
         */
        public function __construct($path = null)
        {
                parent::__construct("downloads", $path);
                $this->id = sprintf("downloads-%s", md5(time() + self::$instances++));
        }

        /**
         * Create download object.
         * 
         * @param string $path The directory path.
         * @param string $name An optional name.
         * @param string|array $match The filename pattern or filename extension array.
         * @param string $desc A longer description.
         * @return Download
         */
        public static function getObject($path, $name, $match, $desc)
        {
                $download = new Download();

                $download->path = $path;
                $download->name = $name;
                $download->desc = $desc;
                $download->match = $match;

                return $download;
        }

        /**
         * Add download location.
         * 
         * @param string $path The directory path.
         * @param string $name An optional name.
         * @param string|array $match The filename pattern or filename extension array.
         * @param string $desc A longer description.
         */
        public function addLocation($path, $name = null, $match = array("gz"), $desc = null)
        {
                if (!isset($name)) {
                        $name = self::getName($path, $name);
                }
                if (!isset($desc)) {
                        $desc = self::getDescription($path);
                }

                $download = self::getObject($path, $name, $match, $desc);
                $this->renderable[$download->path] = $download;
        }

        /**
         * Add download object.
         * @param Download $download The download object.
         */
        public function addDownload($download)
        {
                $this->renderable[$download->path] = $download;
        }

        /**
         * Should script/style be initialized?
         * @return boolean
         */
        public function initialize()
        {
                return self::$instances == 1;
        }

        /**
         * Get name for location.
         * 
         * Call this function to get standard name for recognized standard locations. If
         * the location is non-standard (and not recognized), then the package name is 
         * returned with first character changed to upper case.
         * 
         * @param string $path The download location.
         * @param string $name The package name.
         * @return string
         */
        public static function getName($path, $name)
        {
                switch ($path) {
                        case 'stable':
                        case 'release':
                        case 'releases':
                                return _("Stable releases");
                        case 'testing':
                        case 'bugfixes':
                                return _("Testing versions");
                        case 'binary':
                        case 'binaries':
                        case 'executable':
                                return _("Binary programs");
                        case 'patch':
                        case 'diffs':
                                return _("Source code patches");
                        default:
                                return ucfirst($name);
                }
        }

        /**
         * Get description for location.
         * 
         * Call this function to get standard description for recognized standard locations.
         * If location is not recognized, then this function returns null.
         * 
         * @param string $path The download location.
         * @return string
         */
        public static function getDescription($path)
        {
                switch ($path) {
                        case 'stable':
                        case 'release':
                        case 'releases':
                                return _("It's recommended that you download the latest stable release. ");
                        case 'testing':
                        case 'bugfixes':
                                return _("Testing version (i.e. from SVN-trunk) will probably run without any problem, but are not mentioned for serious use. ");
                        case 'binary':
                        case 'binaries':
                        case 'executable':
                                return _("Please ensure to select the correct binary format for your platform. ");
                        case 'patch':
                        case 'diffs':
                                return _("Patches are normally in unified diff-format, use the patch command to apply. ");
                }
        }

}
