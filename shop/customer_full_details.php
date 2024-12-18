<!DOCTYPE HTML>
<html>
<head>
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Customer Full Details</h1>
        </div>

        <?php
        include 'config/database.php';

        $id = isset($_GET['id']) ? intval($_GET['id']) : die('ERROR: Record ID not found.');

        try {
            $query = "SELECT id, username, first_name, last_name, gender, date_of_birth, registration_date, account_status FROM customers WHERE id = :id";
            $stmt = $con->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->execute();

            $row = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($row) {
                echo "<table class='table table-hover table-responsive table-bordered'>";
                echo "<tr><th>ID</th><td>{$row['id']}</td></tr>";
                echo "<tr><th>Username</th><td>{$row['username']}</td></tr>";
                echo "<tr><th>First Name</th><td>{$row['first_name']}</td></tr>";
                echo "<tr><th>Last Name</th><td>{$row['last_name']}</td></tr>";
                echo "<tr><th>Gender</th><td>{$row['gender']}</td></tr>";
                echo "<tr><th>Date of Birth</th><td>{$row['date_of_birth']}</td></tr>";
                echo "<tr><th>Registration Date</th><td>{$row['registration_date']}</td></tr>";
                echo "<tr><th>Account Status</th><td>{$row['account_status']}</td></tr>";
                echo "</table>";
            } else {
                echo "<div class='alert alert-danger'>Record not found.</div>";
            }
        } catch (PDOException $exception) {
            die("ERROR: " . $exception->getMessage());
        }
        ?>

        <a href='customer_listing.php' class='btn btn-primary'>Back to Customer Listing</a>
    </div>
</body>
</html>
