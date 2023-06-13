<?php

$filename = "example.txt"; // Specify the name of the file

$content = "This is the content of the file."; // Content to be written

// Open the file in write mode
$file = fopen($filename, "w");

if ($file) {
    // Write the content to the file
    fwrite($file, $content);
    
    // Close the file
    fclose($file);
    
    echo "File created and written successfully.";
} else {
    echo "Unable to open file.";
}

?>
