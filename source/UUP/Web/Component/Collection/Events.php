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

/**
 * The event handler collection.
 * 
 * Global Event Attributes:
 * --------------------------- 
 * Below are the global event attributes that can be added to HTML elements to define event actions.
 * 
 * ** Window Event Attributes: **
 * --------------------------- 
 * Events triggered for the window object (applies to the <body> tag).
 * 
 * @property string $onafterprint Script to be run after the document is printed.
 * @property string $onbeforeprint Script to be run before the document is printed.
 * @property string $onbeforeunload Script to be run when the document is about to be unloaded.
 * @property string $onerror Script to be run when an error occurs when the file is being loaded.
 * @property string $onhashchange Script to be run when there has been changes to the anchor part of the a URL.
 * @property string $onload Fires after the page is finished loading.
 * @property string $onmessage Script to be run when the message is triggered.
 * @property string $onoffline Script to be run when the browser starts to work offline.
 * @property string $ononline Script to be run when the browser starts to work online.
 * @property string $onpagehide Script to be run when a user navigates away from a page.
 * @property string $onpageshow Script to be run when a user navigates to a page.
 * @property string $onpopstate Script to be run when the window's history changes.
 * @property string $onresize Fires when the browser window is resized.
 * @property string $onstorage Script to be run when a Web Storage area is updated.
 * @property string $onunload Fires once a page has unloaded (or the browser window has been closed).
 * 
 * ** Form Events: **
 * --------------------------- 
 * Events triggered by actions inside a HTML form (applies to almost all HTML elements, but is 
 * most used in form elements).
 * 
 * @property string $onblur Fires the moment that the element loses focus.
 * @property string $onchange Fires the moment when the value of the element is changed.
 * @property string $oncontextmenu Script to be run when a context menu is triggered.
 * @property string $onfocus Fires the moment when the element gets focus.
 * @property string $oninput Script to be run when an element gets user input.
 * @property string $oninvalid Script to be run when an element is invalid.
 * @property string $onreset Fires when the Reset button in a form is clicked.
 * @property string $onsearch Fires when the user writes something in a search field (for <input="search">).
 * @property string $onselect Fires after some text has been selected in an element.
 * @property string $onsubmit Fires when a form is submitted.
 * 
 * ** Keyboard Events: **
 * --------------------------- 
 * 
 * @property string $onkeydown Fires when a user is pressing a key.
 * @property string $onkeypress Fires when a user presses a key.
 * @property string $onkeyup Fires when a user releases a key.
 * 
 * ** Mouse Events: **
 * --------------------------- 
 * 
 * @property string $onclick Fires on a mouse click on the element.
 * @property string $ondblclick Fires on a mouse double-click on the element.
 * @property string $onmousedown Fires when a mouse button is pressed down on an element.
 * @property string $onmousemove Fires when the mouse pointer is moving while it is over an element.
 * @property string $onmouseout Fires when the mouse pointer moves out of an element.
 * @property string $onmouseover Fires when the mouse pointer moves over an element.
 * @property string $onmouseup Fires when a mouse button is released over an element.
 * @property string $onmousewheel Deprecated. Use the onwheel attribute instead.
 * @property string $onwheel Fires when the mouse wheel rolls up or down over an element.
 * 
 * ** Drag Events: **
 * --------------------------- 
 * 
 * @property string $ondrag Script to be run when an element is dragged.
 * @property string $ondragend Script to be run at the end of a drag operation.
 * @property string $ondragenter Script to be run when an element has been dragged to a valid drop target.
 * @property string $ondragleave Script to be run when an element leaves a valid drop target.
 * @property string $ondragover Script to be run when an element is being dragged over a valid drop target.
 * @property string $ondragstart Script to be run at the start of a drag operation.
 * @property string $ondrop Script to be run when dragged element is being dropped.
 * @property string $onscroll Script to be run when an element's scrollbar is being scrolled.
 * 
 * ** Clipboard Events: **
 * --------------------------- 
 * 
 * @property string $oncopy Fires when the user copies the content of an element.
 * @property string $oncut Fires when the user cuts the content of an element.
 * @property string $onpaste Fires when the user pastes some content in an element.
 * 
 * ** Media Events: **
 * --------------------------- 
 * Events triggered by medias like videos, images and audio (applies to all HTML elements, but 
 * is most common in media elements, like <audio>, <embed>, <img>, <object>, and <video>).
 * 
 * @property string $onabort Script to be run on abort.
 * @property string $oncanplay Script to be run when a file is ready to start playing (when it has buffered enough to begin).
 * @property string $oncanplaythrough Script to be run when a file can be played all the way to the end without pausing for buffering.
 * @property string $oncuechange Script to be run when the cue changes in a <track> element.
 * @property string $ondurationchange Script to be run when the length of the media changes.
 * @property string $onemptied Script to be run when something bad happens and the file is suddenly unavailable (like unexpectedly disconnects).
 * @property string $onended Script to be run when the media has reach the end (a useful event for messages like "thanks for listening").
 * @property string $onloadeddata Script to be run when media data is loaded.
 * @property string $onloadedmetadata Script to be run when meta data (like dimensions and duration) are loaded.
 * @property string $onloadstart Script to be run just as the file begins to load before anything is actually loaded.
 * @property string $onpause Script to be run when the media is paused either by the user or programmatically.
 * @property string $onplay Script to be run when the media is ready to start playing.
 * @property string $onplaying Script to be run when the media actually has started playing.
 * @property string $onprogress Script to be run when the browser is in the process of getting the media data.
 * @property string $onratechange Script to be run each time the playback rate changes (like when a user switches to a slow motion or fast forward mode).
 * @property string $onseeked Script to be run when the seeking attribute is set to false indicating that seeking has ended.
 * @property string $onseeking Script to be run when the seeking attribute is set to true indicating that seeking is active.
 * @property string $onstalled Script to be run when the browser is unable to fetch the media data for whatever reason.
 * @property string $onsuspend Script to be run when fetching the media data is stopped before it is completely loaded for whatever reason.
 * @property string $ontimeupdate Script to be run when the playing position has changed (like when the user fast forwards to a different point in the media).
 * @property string $onvolumechange Script to be run each time the volume is changed which (includes setting the volume to "mute").
 * @property string $onwaiting Script to be run when the media has paused but is expected to resume (like when the media pauses to buffer more data).
 * 
 * ** Misc Events: **
 * --------------------------- 
 * 
 * @property string $onshow Fires when a <menu> element is shown as a context menu.
 * @property string $ontoggle Fires when the user opens or closes the <details> element.
 * 
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Events extends Collection
{

        /**
         * Constructor.
         */
        public function __construct()
        {
                parent::__construct(' ', '=', '"');
        }

        protected function explore($input, &$result)
        {
                $pattern = "/([^=\s]+)\s*=\s*([\"'])(.*?)\\2(?: |$)/m";
                $matched = array();

                if (preg_match_all($pattern, $input, $matched, PREG_SET_ORDER)) {
                        if (count($matched[0]) !== 4) {
                                throw new \DomainException("Missmatch in expected number of captured regexp matches");
                        }
                        for ($i = 0; $i < count($matched); ++$i) {
                                $matched[$i][3] = stripslashes($matched[$i][3]);
                                $matched[$i][3] = strtr($matched[$i][3], '"', "'");
                                $result[$matched[$i][1]] = $matched[$i][3];
                        }
                }
        }

}
