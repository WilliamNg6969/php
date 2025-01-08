<!DOCTYPE HTML>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <div class="page-header">
            <h1>Read Products</h1>
        </div>
        
        <?php
        include 'config/database.php';

        $query = "SELECT id, name, description, price, product_cat_name FROM product
        INNER JOIN producy_cat ON product_cat = product_cat.product_cat_id ORDER BY id DESC";
        $stmt = $con->prepare($query);
        $stmt->execute();

        $num = $stmt->rowCount();

      
        echo "<a href='create.php' class='btn btn-primary m-b-1em'>Create New Product</a>";

        if ($num > 0) {
            
            echo "<table class='table table-hover table-responsive table-bordered'>";
            
           
            echo "<tr>";
            echo "<th>ID</th>";
            echo "<th>Name</th>";
            echo "<th>Description</th>";
            echo "<th>Price</th>";
            echo "<th>Action</th>";
            echo "</tr>";

          
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                extract($row);
                
                
                echo "<tr>";
                echo "<td>{$id}</td>";
                echo "<td>{$name}</td>";
                echo "<td>{$description}</td>";
                echo "<td>{$price}</td>";
                echo "<td>";
                echo "<a href='read_one.php?id={$id}' class='btn btn-info m-r-1em'>Read</a> ";
                echo "<a href='update.php?id={$id}' class='btn btn-primary m-r-1em'>Edit</a> ";
                echo "<a href='#' onclick='delete_user({$id});' class='btn btn-danger'>Delete</a>";
                echo "</td>";
                echo "</tr>";
            }

         
            echo "</table>";
        } else {
            echo "<div class='alert alert-danger'>No records found.</div>";
        }
        ?>
    </div> <!-- end .container -->

    <!-- Confirm delete record script -->
    <script>
        function delete_user(id) {
            if (confirm('Are you sure you want to delete this record?')) {
                window.location = 'delete.php?id=' + id;
            }
        }
    </script>
</body>
</html>
