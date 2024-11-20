<!DOCTYPE html>
<html>
    <head>
        <style>
        </style>
    </head>
    <body>
        <?php
      define("username","admin");
      define("password","12345");
        
        $a = "admin";
        $b = "12345";
          
        if ($a == username ) {
            if ($b == password ) 
                echo "Login successful!";
            else 
            echo "Invalid password";
        
        } else{
           echo "Invalid username";
        
        } 
        ?>
    </body>
</html>