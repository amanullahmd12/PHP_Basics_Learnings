<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>gettype()_settype()</title>
</head>
<body>
    <?php
$value = 42;
echo "Initial value: $value <br>";
echo "Type of variable: " . gettype($value) . "<br>";

settype($value, "string");
echo "After settype() conversion: $value<br>";
echo "Type of variable: " . gettype($value) . "<br>";
?>

</body>
</html>