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
 Your age: <?php 
 $_age = $_GET["age"];
 if (filter_var($_age, FILTER_VALIDATE_INT, ["options" => ["min_range" => 18, "max_range" => 100]])) {
    echo "$_age is valid ";
}else {
    echo "$_age is not valid ";
}
    ?>,

</body>
</html>
