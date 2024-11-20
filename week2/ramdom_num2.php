<!DOCTYPE html>
<html>
    <head>
        <style> 
        .e{font-weight: bold; font-size: larger;} </style>
    </head>
    <body>
        <?php
        
        $a = rand (1, 100);
        $b = rand (1, 100);
        
        
        if ($a > $b){
            echo "<p class=e>".($a)."<p>";
             echo "<p>".($b)."<p>";
        
        } else {
            echo "<p class=e>".($b)."<p>";
            echo "<p>".($a)."<p>";
        }

           

        

        ?>
    </body>
</html>