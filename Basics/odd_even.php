<!DOCTYPE html>
<html>
<head>
    <title>Odd/Even Number Checker</title>
</head>
<body>
    <h2>Odd/Even Number Checker</h2>
    <form method="post" action="odd_even.php">
        <label for="number">Enter a number:</label>
        <input type="text" id="number" name="number" required>
        <br><br>
        <input type="submit" value="Check">
    </form>
    <br>

    <?php
   
        $number = $_POST["number"];
        if (is_numeric($number)) {
            if ($number % 2 == 0) {
                echo "The number $number is even.";
            } else {
                echo "The number $number is odd.";
            }
        } else {
            echo "Invalid input. Please enter a valid number.";
        }
    
    ?>
</body>
</html>
