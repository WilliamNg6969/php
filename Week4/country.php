<!DOCTYPE html>
<html>
<body>
    <form method="GET" action="">
       
        <label for="country">Select Country:</label>
        <select name="country" id="country" required>
            <option value="" disabled selected>--Select Country--</option>
            <option value="Malaysia">Malaysia</option>
            <option value="Singapore">Singapore</option>
            <option value="India">India</option>
            <option value="Australia">Australia</option>
            <option value="Vietnam">Vietnam</option>
            <option value="Japan">Japan</option>
            <option value="Thailand">Thailand</option>
            <option value="South Africa">South Africa</option>
            <option value="Hong Kong">Hong Kong</option>
            <option value="Taiwan">Taiwan</option>
        </select>
        <br><br>

        
        <label for="day">Day:</label>
        <select name="day" id="day" required>
            <option value="" disabled selected>Day</option>
            <?php for ($i = 1; $i <= 31; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>

        <label for="month">Month:</label>
        <select name="month" id="month" required>
            <option value="" disabled selected>Month</option>
            <?php for ($i = 1; $i <= 12; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>

        <label for="year">Year:</label>
        <select name="year" id="year" required>
            <option value="" disabled selected>Year</option>
            <?php for ($i = 2000; $i <= 2024; $i++): ?>
                <option value="<?= $i ?>"><?= $i ?></option>
            <?php endfor; ?>
        </select>
        <br><br>

        
        <label>Gender:</label>
        <input type="radio" name="gender" value="Male" required> Male
        <input type="radio" name="gender" value="Female" required> Female
        <br><br>

        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET" && !empty($_GET)) {
       
        $country = $_GET['country'] ?? '';
        $day = $_GET['day'] ?? '';
        $month = $_GET['month'] ?? '';
        $year = $_GET['year'] ?? '';
        $gender = $_GET['gender'] ?? '';

        
        if ($country && $day && $month && $year && $gender) {
            
            echo "<h2>Selected Values:</h2>";
            echo "Country: $country<br>";
            echo "Date of Birth: $day/$month/$year<br>";
            echo "Gender: $gender<br>";

            
            $birthDate = DateTime::createFromFormat('Y-m-d', "$year-$month-$day");
            $currentDate = new DateTime();
            $age = $currentDate->diff($birthDate)->y;

            echo "Age: $age years<br>";
        } else {
            echo "<p style='color: red;'>Whyyyyyyyy!</p>";
        }
    }
    ?>
</body>
</html>