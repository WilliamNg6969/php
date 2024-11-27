<!DOCTYPE html>
<html>
<body>
    


Welcome: <?php echo $_GET["name"]; ?><br>
Your Email: <?php   
$_email = $_GET["email"];
if (filter_var($_email, FILTER_VALIDATE_EMAIL)) {
    echo "$_email is a valid email address";
} else {
    echo "$_email is not a valid email address";
}
?><br>
 Your age: <?php echo $_GET["age"];
 ?>

</body>
</html>
