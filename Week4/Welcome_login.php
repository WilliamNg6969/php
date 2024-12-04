<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);

   
    if (empty($username) || empty($password)) {
        echo "Please enter your username and password.";
    } else {
    
        if ($username == 'william' && $password == '1234') {
            echo "Welcome!";
        } else {
            echo "Please login again.";
        }
    }
} else {
    
    echo "Invalid request.";
}
?>
