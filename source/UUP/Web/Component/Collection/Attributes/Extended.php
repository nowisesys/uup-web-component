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

/**
 * Extended list of HTML attributes.
 * 
 * This list contains all HTML attributes except for event handlers.
 * 
 * @property string $accept Specifies the types of files that the server accepts (only for type="file"). Applies to <input>.
 * @property string $accept-charset Specifies the character encodings that are to be used for the form submission. Applies to <form>.
 * @property string $accesskey Specifies a shortcut key to activate/focus an element. Applies to Global Attributes.
 * @property string $action Specifies where to send the form-data when a form is submitted. Applies to <form>.
 * @property string $align Specifies the alignment according to surrounding elements. Use CSS instead (Notice: Not supported in HTML 5).
 * @property string $alt Specifies an alternate text when the original element fails to display. Applies to <area>, <img>, <input>.
 * @property bool $async Specifies that the script is executed asynchronously (only for external scripts). Applies to <script>.
 * @property bool $autocomplete Specifies whether the <form> or the <input> element should have autocomplete enabled. Applies to <form>, <input>.
 * @property bool $autofocus Specifies that the element should automatically get focus when the page loads. Applies to <button>, <input>, <select>, <textarea>.
 * @property bool $autoplay Specifies that the audio/video will start playing as soon as it is ready. Applies to <audio>, <video>.
 * @property string $bgcolor Specifies the background color of an element. Use CSS instead (Notice: Not supported in HTML 5).
 * @property string $border Specifies the width of the border of an element. Use CSS instead (Notice: Not supported in HTML 5).
 * @property string $charset Specifies the character encoding. Applies to <meta>, <script>.
 * @property bool $checked Specifies that an <input> element should be pre-selected when the page loads (for type="checkbox" or type="radio"). Applies to <input>.
 * @property string $cite Specifies a URL which explains the quote/deleted/inserted text. Applies to <blockquote>, <del>, <ins>, <q>.
 * @property string $class Specifies one or more classnames for an element (refers to a class in a style sheet). Applies to Global Attributes.
 * @property string $color Specifies the text color of an element. Use CSS instead (Notice: Not supported in HTML 5).
 * @property string $cols Specifies the visible width of a text area. Applies to <textarea>.
 * @property string $colspan Specifies the number of columns a table cell should span. Applies to <td>, <th>.
 * @property string $content Gives the value associated with the http-equiv or name attribute. Applies to <meta>.
 * @property bool $contenteditable Specifies whether the content of an element is editable or not. Applies to Global Attributes.
 * @property string $contextmenu Specifies a context menu for an element. The context menu appears when a user right-clicks on the element. Applies to Global Attributes.
 * @property bool $controls Specifies that audio/video controls should be displayed (such as a play/pause button etc). Applies to <audio>, <video>.
 * @property string $coords Specifies the coordinates of the area. Applies to <area>.
 * @property string $data Specifies the URL of the resource to be used by the object. Applies to <object>.
 * @property string $data-* Used to store custom data private to the page or application. Applies to Global Attributes.
 * @property string $datetime Specifies the date and time. Applies to <del>, <ins>, <time>.
 * @property bool $default Specifies that the track is to be enabled if the user's preferences do not indicate that another track would be more appropriate. Applies to <track>.
 * @property bool $defer Specifies that the script is executed when the page has finished parsing (only for external scripts). Applies to <script>.
 * @property string $dir Specifies the text direction for the content in an element. Applies to Global Attributes.
 * @property string $dirname Specifies that the text direction will be submitted. Applies to <input>, <textarea>.
 * @property bool $disabled Specifies that the specified element/group of elements should be disabled. Applies to <button>, <fieldset>, <input>, <optgroup>, <option>, <select>, <textarea>.
 * @property bool $download Specifies that the target will be downloaded when a user clicks on the hyperlink. Applies to <a>, <area>.
 * @property bool|string $draggable Specifies whether an element is draggable or not (true|false or "auto"). Applies to Global Attributes.
 * @property string $dropzone Specifies whether the dragged data is copied, moved, or linked, when dropped ("copy|move|link"). Applies to Global Attributes.
 * @property string $enctype Specifies how the form-data should be encoded when submitting it to the server (only for method="post"). Applies to <form>.
 * @property string $for Specifies which form element(s) a label/calculation is bound to. Applies to <label>, <output>.
 * @property string $form Specifies the name of the form the element belongs to. Applies to <button>, <fieldset>, <input>, <label>, <meter>, <object>, <output>, <select>, <textarea>.
 * @property string $formaction Specifies where to send the form-data when a form is submitted. Only for type="submit". Applies to <button>, <input>.
 * @property string $headers Specifies one or more headers cells a cell is related to. Applies to <td>, <th>.
 * @property string $height Specifies the height of the element. Applies to <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>.
 * @property bool $hidden Specifies that an element is not yet, or is no longer, relevant. Applies to Global Attributes.
 * @property string $high Specifies the range that is considered to be a high value. Applies to <meter>.
 * @property string $href Specifies the URL of the page the link goes to. Applies to <a>, <area>, <base>, <link>.
 * @property string $hreflang Specifies the language of the linked document. Applies to <a>, <area>, <link>.
 * @property string $http-equiv Provides an HTTP header for the information/value of the content attribute. Applies to <meta>.
 * @property string $id Specifies a unique id for an element. Applies to Global Attributes.
 * @property bool $ismap Specifies an image as a server-side image-map. Applies to <img>.
 * @property string $kind Specifies the kind of text track. Applies to <track>.
 * @property string $label Specifies the title of the text track. Applies to <track>, <option>, <optgroup>.
 * @property string $lang Specifies the language of the element's content. Applies to Global Attributes.
 * @property string $list Refers to a <datalist> element that contains pre-defined options for an <input> element. Applies to <input>.
 * @property bool $loop Specifies that the audio/video will start over again, every time it is finished. Applies to <audio>, <video>.
 * @property string $low Specifies the range that is considered to be a low value. Applies to <meter>.
 * @property string $max Specifies the maximum value. Applies to <input>, <meter>, <progress>.
 * @property string $maxlength Specifies the maximum number of characters allowed in an element. Applies to <input>, <textarea>.
 * @property string $media Specifies what media/device the linked document is optimized for. Applies to <a>, <area>, <link>, <source>, <style>.
 * @property string $method Specifies the HTTP method to use when sending form-data. Applies to <form>.
 * @property string $min Specifies a minimum value. Applies to <input>, <meter>.
 * @property bool $multiple Specifies that a user can enter more than one value. Applies to <input>, <select>.
 * @property bool $muted Specifies that the audio output of the video should be muted. Applies to <video>, <audio>.
 * @property string $name Specifies the name of the element. Applies to <button>, <fieldset>, <form>, <iframe>, <input>, <map>, <meta>, <object>, <output>, <param>, <select>, <textarea>.
 * @property bool $novalidate Specifies that the form should not be validated when submitted. Applies to <form>.
 * @property bool $open Specifies that the details should be visible (open) to the user. Applies to <details>.
 * @property string $optimum Specifies what value is the optimal value for the gauge. Applies to <meter>.
 * @property string $pattern Specifies a regular expression that an <input> element's value is checked against. Applies to <input>.
 * @property string $placeholder Specifies a short hint that describes the expected value of the element. Applies to <input>, <textarea>.
 * @property string $poster Specifies an image to be shown while the video is downloading, or until the user hits the play button. Applies to <video>.
 * @property string|bool $preload Specifies if and how the author thinks the audio/video should be loaded when the page loads (true or "auto|metadata|none"). Applies to <audio>, <video>.
 * @property bool $readonly Specifies that the element is read-only. Applies to <input>, <textarea>.
 * @property string $rel Specifies the relationship between the current document and the linked document. Applies to <a>, <area>, <link>.
 * @property bool $required Specifies that the element must be filled out before submitting the form. Applies to <input>, <select>, <textarea>.
 * @property bool $reversed Specifies that the list order should be descending (9,8,7...). Applies to <ol>.
 * @property string $rows Specifies the visible number of lines in a text area. Applies to <textarea>.
 * @property string $rowspan Specifies the number of rows a table cell should span. Applies to <td>, <th>.
 * @property string|bool $sandbox Enables an extra set of restrictions for the content in an <iframe>. Applies to <iframe>.
 * @property string $scope Specifies whether a header cell is a header for a column, row, or group of columns or rows. Applies to <th>.
 * @property bool $scoped Specifies that the styles only apply to this element's parent element and that element's child elements. Applies to <style>.
 * @property bool $selected Specifies that an option should be pre-selected when the page loads. Applies to <option>.
 * @property string $shape Specifies the shape of the area. Applies to <area>.
 * @property string $size Specifies the width, in characters (for <input>) or specifies the number of visible options (for <select>). Applies to <input>, <select>.
 * @property string $sizes Specifies the size of the linked resource. Applies to <img>, <link>, <source>.
 * @property string $span Specifies the number of columns to span. Applies to <col>, <colgroup>.
 * @property bool $spellcheck Specifies whether the element is to have its spelling and grammar checked or not. Applies to Global Attributes.
 * @property string $src Specifies the URL of the media file. Applies to <audio>, <embed>, <iframe>, <img>, <input>, <script>, <source>, <track>, <video>.
 * @property string $srcdoc Specifies the HTML content of the page to show in the <iframe>. Applies to <iframe>.
 * @property string $srclang Specifies the language of the track text data (required if kind="subtitles"). Applies to <track>.
 * @property string $srcset Specifies the URL of the image to use in different situations. Applies to <img>, <source>.
 * @property string $start Specifies the start value of an ordered list. Applies to <ol>.
 * @property string $step Specifies the legal number intervals for an input field. Applies to <input>.
 * @property string $style Specifies an inline CSS style for an element. Applies to Global Attributes.
 * @property string $tabindex Specifies the tabbing order of an element. Applies to Global Attributes.
 * @property string $target Specifies the target for where to open the linked document or where to submit the form. Applies to <a>, <area>, <base>, <form>.
 * @property string $title Specifies extra information about an element. Applies to Global Attributes.
 * @property bool $translate Specifies whether the content of an element should be translated or not. Applies to Global Attributes.
 * @property string $type Specifies the type of element. Applies to <button>, <embed>, <input>, <link>, <menu>, <object>, <script>, <source>, <style>.
 * @property string $usemap Specifies an image as a client-side image-map. Applies to <img>, <object>.
 * @property string $value Specifies the value of the element. Applies to <button>, <input>, <li>, <option>, <meter>, <progress>, <param>.
 * @property string $width Specifies the width of the element. Applies to <canvas>, <embed>, <iframe>, <img>, <input>, <object>, <video>.
 * @property string $wrap Specifies how the text in a text area is to be wrapped when submitted in a form. Applies to <textarea>.
 *
 * @author Anders Lövgren (QNET)
 * @package UUP
 * @subpackage Web Components
 */
class Extended extends Virtual
{

        //put your code here
}
