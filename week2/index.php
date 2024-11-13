<!DOCTYPE html>
<html>
    <head>
        <style>
            body {background-color: white; font-size: 50px;}
            .redtext {
                color: red; 
            }
            .bluetext {
                color:blue
            }
            .greentext {
                color:green
            }

            
        </style>
    </head>
    <body>  
    <?php 
    echo "<p class=redtext>my first PHP script! </p>";
    date_default_timezone_set('Asia/Kuala_Lumpur');
    echo "<p class=bluetext>".date("d M y")."</p>";  
    echo "<p class=greentext>".date(" h i A")."</p>";

$script_tz = date_default_timezone_get();
    ?>
    
    </body>
</html>