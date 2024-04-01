<?php
// uploadimage.php

include '../../config/database.php'; // Include your database connection file

// Retrieve the tracking ID from the URL
if (isset($_GET['trackId'])) {
    $uploadedTrackId = $_GET['trackId'];

    // Process the uploaded file
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["file"])) {
        $targetDir = "uploads/"; // Change this to the directory where you want to store the uploaded files
        $originalFileName = $_FILES["file"]["name"];
        $fileExtension = pathinfo($originalFileName, PATHINFO_EXTENSION);
        $uniqueFileName = generateUniqueFileName($targetDir, $fileExtension);

        $targetFile = $targetDir . $uniqueFileName;
        $uploadOk = 1;

        // Check if the file already exists
        if (file_exists($targetFile)) {
            echo "Sorry, the file already exists.";
            $uploadOk = 0;
        }

        // Check file size (adjust the limit as needed)
        if ($_FILES["file"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            // If everything is OK, try to upload the file
            if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
                // Update the 'inpayment' table with the file path
                $updateQuery = "UPDATE `inpayment` SET `image`='" . $targetFile . "' WHERE `trackid`='" . mysqli_real_escape_string($link, $uploadedTrackId) . "'";
                if (mysqli_query($link, $updateQuery)) {
                    // Redirect to index.php after a successful upload
                    header("Location: ../../index.php");
                    exit();
                } else {
                    echo "Error updating the database: " . mysqli_error($link);
                }
            } else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
    } else {
        echo "Invalid request or no file uploaded.";
    }
} else {
    // Handle the case when trackId is not present in the URL
}

// Function to generate a unique filename
function generateUniqueFileName($targetDir, $fileExtension) {
    return uniqid('uploaded_', true) . '.' . $fileExtension;
}
?>
