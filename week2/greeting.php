<!DOCTYPE html>
<html>
    <head>
        <style>
        
        </style>
    </head>
    <body>
        
    <?php
     $a = rand (0, 23);

     if($a >= 5 && $a <= 11) {
        echo "Good morning";
     }
     elseif($a >= 12 && $a <=17) {
        echo "Good afternoon";
     }
     elseif($a >= 18 && $a <= 21) {
        echo "Good evening";
     }else{
        echo "$a Good night" ;
     }
     
     ?>
    
     </body>
</html>