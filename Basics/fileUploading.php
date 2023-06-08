<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
    <h2>File Upload</h2>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
        if (!empty($_FILES["file"]["name"])) {
            $file = $_FILES["file"];

            $allowedExtensions = array("jpg", "jpeg", "png", "gif");

            $maxFileSize = 1024 * 1024; 

       
            $fileExtension = strtolower(pathinfo($file["name"], PATHINFO_EXTENSION));
            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Error: Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.<br>";
            }

            
            if ($file["size"] > $maxFileSize) {
                echo "Error: File size exceeds the maximum limit of 2MB.<br>";
            }

           
            if (in_array($fileExtension, $allowedExtensions) && $file["size"] <= $maxFileSize) {
                $destination = "uploads/" . $file["name"];
                move_uploaded_file($file["tmp_name"], $destination);
                echo "File uploaded successfully.<br>";
            }
        } else {
            echo "Error: No file selected.<br>";
        }
    }
    ?>

    <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
        Select a file: <input type="file" name="file"><br>
        <input type="submit" value="Upload">
    </form>
</body>
</html>
