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
      <form action="insert_payment.php" method="post">
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
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


