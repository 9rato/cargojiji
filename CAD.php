<?php

// Fetch data from the walletpayment table
$result = mysqli_query($link, "SELECT * FROM walletpayment");

// Display data in the table
while ($row = mysqli_fetch_assoc($result)) {
  echo "<img src='{$row['image']}' alt='Image' style='max-width: 100px; max-height: 100px;'>";
  echo "{$row['addresstitle']}";
  echo "{$row['wallet']}";
  echo "<td><img src='{$row['barcodeimge']}' alt='Barcode Image' style='max-width: 100px; max-height: 100px;'>";
  
  // Update button
}

// Close database connection
mysqli_close($link);
?>
