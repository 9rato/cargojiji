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
  <h2>Wallet Payment Data</h2>

  <!-- Refresh button -->
  <button class="btn btn-primary mb-3" onclick="refreshTable()">Refresh</button>

  <table class="table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Address Title</th>
        <th>Wallet</th>
        <th>Barcode Image</th>
        <th>Action</th> <!-- New column for the Delete button -->
      </tr>
    </thead>
    <tbody>
      <?php

        // Fetch data from the walletpayment table
        $result = mysqli_query($link, "SELECT * FROM walletpayment");

        // Display data in the table
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<tr>";
          echo "<td>{$row['id']}</td>";
          echo "<td><img src='{$row['image']}' alt='Image' style='max-width: 100px; max-height: 100px;'></td>";
          echo "<td>{$row['addresstitle']}</td>";
          echo "<td>{$row['wallet']}</td>";
          echo "<td><img src='{$row['barcodeimge']}' alt='Barcode Image' style='max-width: 100px; max-height: 100px;'></td>";
          
          // Update button
          echo "<td><a href='deletewallet.php?id={$row['id']}' class='btn btn-info btn-sm'>Delete</a></td>";

          echo "</tr>";
        }

        // Close database connection
        mysqli_close($link);
      ?>
    </tbody>
  </table>

        


</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  // JavaScript function to refresh the table
  function refreshTable() {
    // Reload the page to fetch updated data
    location.reload();
  }


</script>

</div>

