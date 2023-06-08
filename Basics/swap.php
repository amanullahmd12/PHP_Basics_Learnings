<!DOCTYPE html>
<html>
<head>
    <title>Number Swap</title>
</head>
<body>
    <h2>Number Swap</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST["num1"];
        $num2 = $_POST["num2"];

        echo "Numbers before swapping:<br>";
        echo "Num1 = $num1, Num2 = $num2<br>";

        // Swapping the numbers using a temporary variable
        $temp = $num1;
        $num1 = $num2;
        $num2 = $temp;

        echo "<br>Numbers after swapping:<br>";
        echo "Num1 = $num1, Num2 = $num2<br>";
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
        Enter the first number: <input type="number" name="num1"><br>
        Enter the second number: <input type="number" name="num2"><br>
        <input type="submit" value="Swap">
    </form>
</body>
</html>
