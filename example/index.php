<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">

<div style="padding: 10px">
    <h1>UUP Web Components</h1>
    <p>
        Components should be rendered for W3.CSS style sheet. Some test might apply 
        transformation of CSS-classes in components that makes them look weird.
    </p>

    <?php
    require_once("../vendor/autoload.php");
    require_once("index.inc");

    echo "<div style=\"display: flex\">\n";
    echo "<div>\n";
    print_menu(include('menu.inc'));
    echo "</div>\n";
    echo "<div style=\"width: 100%\">\n";
    load_example();
    echo "</div>\n";
    echo "</div>\n";

    ?>

</div>
