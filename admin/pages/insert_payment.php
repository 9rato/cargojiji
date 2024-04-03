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

// Close the database connection
mysqli_close($link);

// Function to send email notification
function sendEmailNotification($recipientEmail, $trackId, $amount) {
    $mail = new PHPMailer(true);

    try {
        // Your SMTP or mail configuration goes here
        // ...

        $mail->setFrom('your_email@example.com', 'Your Name');
        $mail->addAddress($recipientEmail);

        $mail->isHTML(true);
        $mail->Subject = "Payment Notification";
        $mail->Body = "Dear user,\n\nYou have a payment to make for the shipment with Track ID: $trackId. The amount to be paid is: $amount.\n\nThank you.";

        $mail->send();
        echo 'Email notification sent successfully.';
    } catch (Exception $e) {
        echo "Email notification error: " . $mail->ErrorInfo;
    }
}
?>
