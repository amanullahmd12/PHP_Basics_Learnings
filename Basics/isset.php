<?php
$var1 = 42;
$var2 = null;
echo ("<h3>isset() Demo</h3>");
echo isset($var1) ? "var1 is set<br>" : "var1 is not set<br>";
echo isset($var2) ? "var2 is set<br>" : "var2 is not set<br>";
echo isset($var3) ? "var3 is set<br>" : "var3 is not set<br>";
echo ("<br>");
?>


<?php
$var1 = 42;
$var2 = "Hello";

echo ("<h3>unset() Demo</h3>");
echo "Before unset():<br>";
echo "var1: $var1<br>";
echo "var2: $var2<br>";

unset($var1);
unset($var2);

echo "After unset():<br>";
echo "var1: " . (isset($var1) ? "set" : "not set") . "<br>";
echo "var2: " . (isset($var2) ? "set" : "not set") . "<br>";
?>
