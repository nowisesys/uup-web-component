<?php
require_once("../vendor/autoload.php");
require_once("index.inc");

$transformer = load_transformer();
set_transformer($transformer);

?>
<!DOCTYPE html> 
<html>
    <head>
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/styles/atom-one-dark.min.css">
        <?php load_stylesheet($transformer) ?>
        <style>
            body {
                margin: 0;
                background-color: white;
            }
        </style>
    </head>        
    <body>

        <h1 class="w3-center w3-blue w3-card-2" style="margin-top: 0px">UUP Web Components</h1>
        <div class="w3-right w3-padding">
            <?php show_transformer($transformer) ?>
        </div>

        <nav class="w3-sidebar w3-bar-block w3-collapse w3-card-2" style="width:200px; top: 0px" id="menu">
            <button class="w3-bar-item w3-button w3-large w3-hide-large w3-hover-red" onclick="close_menu()">Close <span class="w3-right">&times;</span></button>
            <?php print_menu(include('menu.inc')); ?>
        </nav>

        <div class="w3-main w3-padding" style="margin-left:200px">
            <button class="w3-button w3-xlarge w3-hide-large" onclick="open_menu()">&#9776;</button>
            <div>
                <p>
                    Components should be rendered for W3.CSS style sheet. Some test might apply 
                    transformation of CSS-classes in components that makes them look weird.
                </p>
            </div>
            <?php
            try {
                    load_example();
            } catch (Exception $exception) {
                    error_log($exception);
                    die(sprintf("<b>%s</b>: <span style=\"color: red\">%s</div>", get_class($exception), $exception->getMessage()));
            }

            ?>
        </div>
        <script>
                function open_menu() {
                    document.getElementById("menu").style.display = "block";
                }
                function close_menu() {
                    document.getElementById("menu").style.display = "none";
                }
        </script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/9.12.0/highlight.min.js"></script>
        <script>hljs.initHighlightingOnLoad()</script>
    <body>
</html>
