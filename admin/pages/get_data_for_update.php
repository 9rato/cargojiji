<?php
// get_data_for_update.php

include '../../config/database.php';

if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Fetch the data for the selected ID
  $result = mysqli_query($link, "SELECT * FROM walletpayment WHERE id = $id");
  $row = mysqli_fetch_assoc($result);

  // Return the data as JSON
  echo json_encode($row);
} else {
  echo "ID not provided.";
}

// Close database connection
mysqli_close($link);
?>
