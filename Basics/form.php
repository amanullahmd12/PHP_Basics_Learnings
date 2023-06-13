
<!DOCTYPE html>
<html>
<head>
  <title>Enter Data</title>
</head>
<body>
  <h2>Enter Data</h2>
  <form method="POST" action="insert.php" enctype="multipart/form-data">
    <label for="first_name">First Name:</label>
    <input type="text" name="first_name" id="first_name" required><br><br>

    <label for="middle_name">Middle Name:</label>
    <input type="text" name="middle_name" id="middle_name"><br><br>

    <label for="last_name">Last Name:</label>
    <input type="text" name="last_name" id="last_name" required><br><br>

    <label for="password">Password:</label>
    <input type="password" name="password" id="password" required><br><br>

    <label for="confirm_password">Confirm Password:</label>
    <input type="password" name="confirm_password" id="confirm_password" required><br><br>

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" required><br><br>

    <label for="contact_number">Contact Number:</label>
    <input type="tel" name="contact_number" id="contact_number"><br><br>

    <label for="gender">Gender:</label>
    <input type="radio" name="gender" id="gender_male" value="Male" required>
    <label for="gender_male">Male</label>
    <input type="radio" name="gender" id="gender_female" value="Female" required>
    <label for="gender_female">Female</label>
    <input type="radio" name="gender" id="gender_other" value="Other" required>
    <label for="gender_other">Other</label><br><br>

    <label for="address">Address:</label>
    <textarea name="address" id="address"></textarea><br><br>

    <label for="pincode">Pincode:</label>
    <input type="text" name="pincode" id="pincode"><br><br>

    <label for="city">City:</label>
    <input type="text" name="city" id="city"><br><br>

    <label for="country">Country:</label>
    <input type="text" name="country" id="country"><br><br>

    <label for="skills">Skills:</label>
    <input type="text" name="skills" id="skills"><br><br>

    <label for="file">Choose File:</label>
    <input type="file" name="file" id="file"><br><br>

    <input type="submit" name="submit" value="Submit">
  </form>

  <?php
  if (isset($_POST['submit'])) {
    // Retrieve the form data
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $last_name = $_POST['last_name'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $email = $_POST['email'];
    $contact_number = $_POST['contact_number'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
    $pincode = $_POST['pincode'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $skills = $_POST['skills'];
    $file_name = $_FILES['file']['name'];

    // Validate password and confirm password
    if ($password !== $confirm_password) {
      echo "Password and Confirm Password do not match.";
      exit;
    }

    // Connect to the database
    $conn = mysqli_connect("localhost", "root", "");

    // Insert the data into the users table
    $query = "INSERT INTO users (first_name, middle_name, last_name, password, email, contact_number, gender, address, pincode, city, country, skills, file_name) VALUES ('$first_name', '$middle_name', '$last_name', '$password', '$email', '$contact_number', '$gender', '$address', '$pincode', '$city', '$country', '$skills', '$file_name')";
    mysqli_query($conn, $query);

    // Close the database connection
    mysqli_close($conn);

    echo "Data inserted successfully!";
  }
  ?>
</body>
</html>
