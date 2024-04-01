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
    <div class="contianer mt-5">
        <!-- Add enctype="multipart/form-data" to enable file uploads -->
        <form action="insertwallet.php" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="image">Logo Image:</label>
            <input type="file" class="form-control" name="image" required>
        </div>
        <div class="form-group">
            <label for="addresstitle">Address Title:</label>
            <input type="text" class="form-control" name="addresstitle" required>
        </div>
        <div class="form-group">
            <label for="wallet">Wallet:</label>
            <input type="text" class="form-control" name="wallet" required>
        </div>
        <div class="form-group">
            <label for="barcodeimge">Barcode Image:</label>
            <input type="file" class="form-control" name="barcodeimge" required>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    

    </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
