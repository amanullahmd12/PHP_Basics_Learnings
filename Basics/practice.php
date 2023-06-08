<!DOCTYPE html>
<html lang="en">
<head>
    <title>Odd Even Checker</title>
</head>
<body>
    <form action="practice.php" method="post">
        <label for="number" >Enter the Number: </label>
        <input name="number" type="text"/>
        <input type="submit" value="Check"/>
</form>
<?php
 $number = $_POST["number"];
 if($number % 2 == 0 ){
     echo "Number is even";
 }
 else{
     echo " Number is odd";
 }
?>
</body>
</html>