<?php

function load_example()
{
        if (($page = filter_input(INPUT_GET, 'page'))) {
                echo "<div class=\"w3-container w3-padding w3-margin w3-border\">\n";
                require_once("$page.inc");
                echo "</div>\n";
        }
}

function print_menu($menu)
{
        echo "<ul>\n";
        foreach ($menu as $k1 => $v1) {
                if (is_array($v1)) {
                        echo "<li>$k1</li>\n";
                        echo "<ul>\n";
                        foreach ($v1 as $k2 => $v2) {
                                echo "<li><a href=\"$v2\">$k2</a></li>\n";
                        }
                        echo "</ul>\n";
                } else {
                        echo "<li><a href=\"$v1\">$k1</li>\n";
                }
        }
        echo "</ul>\n";
}

function dump_property_data($props)
{
        echo "<span style=\"color: #cccccc\">\n";
        print_r($props->data());
        echo "</span>\n";
}
