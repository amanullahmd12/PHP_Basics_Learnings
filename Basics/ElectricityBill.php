<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill Checker</title>
</head>
<style>
    body{
        background-color:#ffff;
        text-align:center;
        justify-content=center;
        display:flex;
        flex-direction: column;
        align-items:center;
    }
    .orange{
        background-color:orange;

    }
    .yellow{
        background-color:yellow;
    }
    h3{
           background-color:orange;
    }
</style>
<body>
    <h1>Electricity Bill </h1>
    <form action="ElectricityBill.php" method="post">
        <table>
        <tr class="yellow">
        <td><label for="consumer_number">Enter Consumer Number</label></td>
        <td><input name="consumer_number" type="text" placeholder="c11" required/></td>
        </tr>
        <tr class="">
        <td><label for="consumer_name">Enter Consumer Name</label></td>
        <td><input name="consumer_name" type="text" placeholder="Enter Your Name" required/></td>
        </tr>
        <tr class="yellow">
        <td><label for="previous_reading">Enter Previous Reading:</label></td>
        <td><input name="previous_reading"  type="text" required/></td>
        </tr>
        <tr class="">
        <td><label for="present_reading">Enter Present Reading:</label></td>
        <td><input name="present_reading" type="text"required/></td>
       </tr>
        </table>
         <input type="submit" value="submit" required/>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $consumer_number = $_POST['consumer_number'];
    $consumer_name = $_POST['consumer_name'];  
    $previous_reading = $_POST['previous_reading'];
    $present_reading = $_POST['present_reading'];

    $units_consumed = $present_reading - $previous_reading;
    $bill_amount = 0;

    if ($units_consumed < 100) {
      $bill_amount = $units_consumed * 3;
    } elseif ($units_consumed > 100 && $units_consumed <= 200) {
      $bill_amount = $units_consumed * 4;
    } elseif ($units_consumed > 200 && $units_consumed <= 300) {
      $bill_amount = $units_consumed * 5;
    } elseif ($units_consumed > 300) {
      $bill_amount = $units_consumed * 6;
    }

    echo "<h3>Bill Details:</h3>";
    echo "Consumer Number:".$consumer_number."<br>";
    echo "Consumer Name: ".$consumer_name."<br>";
    echo "Previous Reading: " . $previous_reading . "<br>";
    echo "Present Reading: " . $present_reading . "<br>";
    echo "Units Consumed: " . $units_consumed . "<br>";
    echo "Bill Amount: Rs. " . $bill_amount;
  }
?>
</body>
</html>


