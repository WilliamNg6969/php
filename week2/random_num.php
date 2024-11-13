<!DOCTYPE html>
<html>
    <head>
        <style>
            body { background-color: black; }
            .greentext {
                color: green;
                font-style: italic;
            }
            .bluetext {
                color: blue;
                font-style: italic;
            }
        </style>
    </head>
    <body>

        <?php
    $num1 = rand(100,200);
    $num2 = rand(100,200);
        echo "<p class='greentext'>" . $num1 . "</p>";
        echo "<br>";
        echo "<p class='bluetext'>" . $num2 . "</p>";
        echo "<p class='bluetext'>" . $num1+$num2 . "</p>";
        echo "<p class='bluetext'>" . $num1*$num2 . "</p>";
        ?>
    </body>
</html>
