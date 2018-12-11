<script>
        function select_transformer(select) {
            var params = new URLSearchParams(location.search);
            params.set("transformer", select.options[select.selectedIndex].value);
            location.href = '?' + params.toString();
        }
</script>

<?php

use UUP\Web\Component\Transform;
use UUP\Web\Component\Transform\Bootstrap;
use UUP\Web\Component\Transform\Native;
use UUP\Web\Component\Transform\Paragon;

function load_stylesheet($transformer)
{
        switch ($transformer) {
                case 'native':
                        break;
                case 'bootstrap':
                        echo "<link rel=\"stylesheet\" href=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css\">\n";
                        echo "<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js\"></script>\n'";
                        echo "<script src=\"https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js\"></script>\n";
                        break;
        }
}

function load_example()
{
        if (($page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_STRING))) {
                require_once("$page.inc");
        }
}

function load_transformer()
{
        if (filter_has_var(INPUT_GET, "transformer")) {
                $selected = filter_input(INPUT_GET, "transformer", FILTER_SANITIZE_STRING);
                setcookie("transformer", $selected);
        } elseif (filter_has_var(INPUT_COOKIE, "transformer")) {
                $selected = filter_input(INPUT_COOKIE, "transformer", FILTER_SANITIZE_STRING);
        } else {
                $selected = 0;
        }

        if ($selected == "reset") {
                setcookie("transformer", "", time() - 1);
        }

        return $selected;
}

function show_transformer($selected)
{
        if ($selected == "reset") {
                $selected = 0;
        }
        $transformers = array(
                0           => "Select transformer",
                "paragon"   => "Paragon",
                "native"    => "Native",
                "bootstrap" => "Bootstrap",
                1           => null,
                "reset"     => "Clear Selected"
        );

        printf("<form>\n");
        printf("<select class=\"w3-select\" name=\"transformer\" onchange=\"select_transformer(this)\">\n");
        foreach ($transformers as $name => $value) {
                $attr = array();
                if ($name === $selected) {
                        $attr[] = "selected";
                }
                if (is_numeric($name)) {
                        $attr[] = "disabled";
                }
                if (is_string($value)) {
                        printf("<option value=\"%s\" %s>%s</option>\n", $name, implode(" ", $attr), $value);
                } else {
                        printf("<option %s>---------------</option>\n", implode(" ", $attr));
                }
        }
        printf("</select>\n");
        printf("</form>\n");
}

function set_transformer($selected)
{
        switch ($selected) {
                case 'paragon':
                        Transform::setInstance(new Paragon());
                        break;
                case 'native':
                        Transform::setInstance(new Native('nat'));
                        break;
                case 'bootstrap':
                        Transform::setInstance(new Bootstrap());
                        break;
                default:
                        Transform::setInstance(new Paragon());
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
