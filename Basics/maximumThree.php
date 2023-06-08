<!DOCTYPE html>
<html lang="en">
<head>
    <title>Maximum of Three Numbers</title>
</head>
<body>
    <h1>Maximum of Three Number</h1>
    <form action="maximumThree.php" method="post">
          <label for="number1" >Enter the Number: </label>
        <input name="number1" type="text"/>
          <label for="number2" >Enter the Number: </label>
        <input name="number2" type="text"/>
          <label for="number3" >Enter the Number: </label>
        <input name="number3" type="text"/>
        <input type="submit"  value="Max"/>
</form>
<?php

$number1 = $_POST["number1"];
$number2 = $_POST["number2"];
$number3 = $_POST["number3"];
$maxNum;
if ($number2 > $number1 && $number2 > $number3) {
    $maxNum = $number2;
} elseif ($number3 > $number1 && $number3 > $number2) {
    $maxNum = $number3;
} else {
    $maxNum = $number1;
}


echo "Maximum Number is " . $maxNum;


?>

</body>
</html>