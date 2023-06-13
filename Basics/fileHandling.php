<?php
// Specify the file path
$file_path = "path/to/your/file.txt";

// Check if the file exists
if (file_exists($file_path)) {
    // Read the file contents
    $file_contents = file_get_contents($file_path);

    // Display the file contents
    echo $file_contents;
} else {
    echo "File not found.";
}
?>
<?php
// Specify the file path
$file_path = "path/to/your/file.txt";

// Open the file in write mode (creates a new file if it doesn't exist)
$file_handle = fopen($file_path, 'w');

// Check if the file was opened successfully
if ($file_handle) {
    // Write to the file
    fwrite($file_handle, "Hello, world!\n");

    // Close the file handle
    fclose($file_handle);

    echo "Data written to the file successfully.";
} else {
    echo "Unable to open the file.";
}
?>
