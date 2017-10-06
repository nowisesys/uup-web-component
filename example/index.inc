<script>
        function select_transformer(select) {
            var params = new URLSearchParams(location.search);
            params.set("transformer", select.options[select.selectedIndex].value);
            location.href = '?' + params.toString();
        }
</script>

<?php

function load_example()
{
        if (($page = filter_input(INPUT_GET, 'page'))) {
                require_once("$page.inc");
        }
}

function load_transformer()
{
        if (filter_has_var(INPUT_GET, "transformer")) {
                $selected = filter_input(INPUT_GET, "transformer");
                setcookie("transformer", $selected);
        } elseif (filter_has_var(INPUT_COOKIE, "transformer")) {
                $selected = filter_input(INPUT_COOKIE, "transformer");
        } else {
                $selected = "none";
        }

        return $selected;
}

function show_transformer($selected)
{
        $transformers = array(
                "none"      => "Select transformer",
                "paragon"   => "Paragon",
                "native"    => "Native",
                "bootstrap" => "Bootstrap"
        );

        printf("<form>\n");
        printf("<select class=\"w3-select\" name=\"transformer\" onchange=\"select_transformer(this)\">\n");
        foreach ($transformers as $name => $value) {
                $attr = array();
                if ($name == $selected) {
                        $attr[] = "selected";
                }
                if ($name == "none") {
                        $attr[] = "disabled";
                }
                printf("<option value=\"%s\" %s>%s</option>\n", $name, implode(" ", $attr), $value);
        }
        printf("</select>\n");
        printf("</form>\n");
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
