<!DOCTYPE html>
<html>
<head>
  <title>Login Page</title>
  <style>
    .container {
      width: 300px;
      margin: 0 auto;
      padding: 20px;
      border: 1px solid #ccc;
      border-radius: 5px;
      background-color: #f5f5f5;
    }

    .form-group {
      margin-bottom: 10px;
    }

    label {
      display: block;
      font-weight: bold;
    }

    input[type="text"],
    input[type="password"] {
      width: 100%;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 4px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Login</h2>
    <form method="POST" action="">
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" required>
      </div>

      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" required>
      </div>

      <input type="submit" name="login" value="Login">
    </form>

    <?php
    // Check if the login form is submitted
    if (isset($_POST['login'])) {
      // Retrieve the form data
      $username = $_POST['username'];
      $password = $_POST['password'];

      // Connect to the database
      $conn = mysqli_connect("localhost", "username", "password", "database_name");

      // Check if the connection was successful
      if ($conn) {
        // Prepare the SQL statement
        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        // Check if any rows are returned
        if (mysqli_num_rows($result) > 0) {
          // Login successful
          echo "Login successful!";

          // Redirect to the home page or any other page
          // header("Location: home.php");
        } else {
          // Login failed
          echo "Invalid username or password.";
        }

        // Close the database connection
        mysqli_close($conn);
      } else {
        echo "Failed to connect to the database.";
      }
    }
    ?>
  </div>
</body>
</html>
