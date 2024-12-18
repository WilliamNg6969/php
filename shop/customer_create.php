<!DOCTYPE HTML>
<html>
<head>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Create New Customer</h1>
        </div>

        <?php
        
        include 'config/database.php';

        
        $username = 'username';
        $password = 'password';
        $first_name = 'first_name';
        $last_name = 'last_name';
        $gender = 'gender';
        $date_of_birth = 'date_of_birth';
        $errors = [];

        if ($_POST) {
           
            $username = htmlspecialchars(strip_tags($_POST['username']));
            $password = htmlspecialchars(strip_tags($_POST['password']));
            $first_name = htmlspecialchars(strip_tags($_POST['first_name']));
            $last_name = htmlspecialchars(strip_tags($_POST['last_name']));
            $gender = htmlspecialchars(strip_tags($_POST['gender']));
            $date_of_birth = htmlspecialchars(strip_tags($_POST['date_of_birth']));

            
            if (empty($username)) $errors[] = "Username is required.";
            if (empty($password)) $errors[] = "Password is required.";
            if (empty($first_name)) $errors[] = "First name is required.";
            if (empty($last_name)) $errors[] = "Last name is required.";
            if (empty($gender)) $errors[] = "Gender is required.";
            if (empty($date_of_birth)) $errors[] = "Date of birth is required.";

            
            if (empty($errors)) {
                try {
                    $query = "INSERT INTO customer SET username=:username, password=:password, first_name=:first_name, last_name=:last_name, gender=:gender, date_of_birth=:date_of_birth, registration_date=NOW(), account_status='Active'";
                    $stmt = $con->prepare($query);

                    
                    $stmt->bindParam(':username', $username);
                    $stmt->bindParam(':password', $password); 
                    $stmt->bindParam(':first_name', $first_name);
                    $stmt->bindParam(':last_name', $last_name);
                    $stmt->bindParam(':gender', $gender);
                    $stmt->bindParam(':date_of_birth', $date_of_birth);

                    
                    if ($stmt->execute()) {
                        echo "<div class='alert alert-success'>Customer was created successfully.</div>";
                    } else {
                        echo "<div class='alert alert-danger'>Unable to save customer. Please try again.</div>";
                    }

                } catch (PDOException $exception) {
                    die("ERROR: " . $exception->getMessage());
                }
            } else {
                echo "<div class='alert alert-danger'><ul>";
                foreach ($errors as $error) {
                    echo "<li>$error</li>";
                }
                echo "</ul></div>";
            }
        }
        ?>

        
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <table class='table table-hover table-responsive table-bordered'>
                <tr>
                    <td>Username</td>
                    <td><input type='text' name='username' class='form-control' value="<?php echo htmlspecialchars($username); ?>" /></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type='password' name='password' class='form-control' /></td>
                </tr>
                <tr>
                    <td>First Name</td>
                    <td><input type='text' name='first_name' class='form-control' value="<?php echo htmlspecialchars($first_name); ?>" /></td>
                </tr>
                <tr>
                    <td>Last Name</td>
                    <td><input type='text' name='last_name' class='form-control' value="<?php echo htmlspecialchars($last_name); ?>" /></td>
                </tr>
                <tr>
                    <td>Gender</td>
                    <td>
                        <input type='radio' name='gender' value='Male' <?php echo ($gender == 'Male') ? 'checked' : ''; ?> /> Male
                        <input type='radio' name='gender' value='Female' <?php echo ($gender == 'Female') ? 'checked' : ''; ?> /> Female
                    </td>
                </tr>
                <tr>
                    <td>Date of Birth</td>
                    <td><input type='date' name='date_of_birth' class='form-control' value="<?php echo htmlspecialchars($date_of_birth); ?>" /></td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <button type='submit' class='btn btn-primary'>Save</button>
                        <a href='index.php' class='btn btn-danger'>Back to read customers</a>
                    </td>
                </tr>
            </table>
        </form>

    </div>
</body>
</html>
