<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Set the target directory for uploaded files
    $target_dir = "C:/Users/deep/Documents/GitHub/file/x/"; // Path to your directory
    $target_file = $target_dir . basename($_FILES["file"]["name"]);
    
    // Check if the file is uploaded successfully
    if (move_uploaded_file($_FILES["file"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars(basename($_FILES["file"]["name"])). " has been uploaded to: $target_file";
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>
