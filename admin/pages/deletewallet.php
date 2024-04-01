<?php
session_start();

// delete.php

include '../../config/database.php';

// Check if ID is provided in the URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Fetch the file paths before deleting the record
    $result = mysqli_query($link, "SELECT image, barcodeimge FROM walletpayment WHERE id = $id");
    $row = mysqli_fetch_assoc($result);

    // Attempt to delete the record from the database
    $sql = "DELETE FROM walletpayment WHERE id = $id";

    if (mysqli_query($link, $sql)) {
        // Delete the associated image and barcode image files
        unlink($row['image']);
        unlink($row['barcodeimge']);

        // Redirect back to the main page after a successful delete
        header("Location: home.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($link);
    }
} else {
    echo "ID not provided.";
}

// Close database connection
mysqli_close($link);
?>

 


