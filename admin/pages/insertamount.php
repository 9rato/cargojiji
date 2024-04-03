<?php
// insert.php

// Database credentials
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cargojij_shipping');
define('DB_PASSWORD', 'cargojij_shipping');
define('DB_NAME', 'cargojij_shipping');

// Attempt to connect to MySQL database
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$conn) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

// Retrieve data from the form
$addresstitle = $_POST['addresstitle'];
$wallet = $_POST['wallet'];

// File upload handling for image
$targetImageFolder = "uploads/images/";
$imageName = $_FILES['image']['name'];
$imageTmpName = $_FILES['image']['tmp_name'];
$targetImageFilePath = $targetImageFolder . $imageName;
move_uploaded_file($imageTmpName, $targetImageFilePath);

// File upload handling for barcode image
$targetBarcodeFolder = "uploads/barcodes/";
$barcodeName = $_FILES['barcodeimge']['name'];
$barcodeTmpName = $_FILES['barcodeimge']['tmp_name'];
$targetBarcodeFilePath = $barcodeName;
move_uploaded_file($barcodeTmpName, $targetBarcodeFilePath);

// SQL query to insert data into the table, including the image file paths
$sql = "INSERT INTO walletpayment (image, addresstitle, wallet, barcodeimge) VALUES ('$targetImageFilePath', '$addresstitle', '$wallet', '$targetBarcodeFilePath')";

if (mysqli_query($conn, $sql)) {
    echo "Record inserted successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close database connection
mysqli_close($conn);
?>