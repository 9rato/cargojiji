<?php
include '../../config/database.php'; // Include your database connection file

// Initialize variables
$row = [];

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the entered track ID
    $searchTrackId = mysqli_real_escape_string($link, $_POST["trackId"]);

    // Perform the search in the 'inpayment' table
    $sql = "SELECT * FROM inpayment WHERE trackid = '$searchTrackId'";
    $result = mysqli_query($link, $sql);

    // Check for errors in the query execution
    if ($result) {
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result); // Fetch the first row
        } else {
            echo "<p>No results found in 'inpayment' table.</p>";
        }
    } else {
        echo "ERROR: Could not execute $sql. " . mysqli_error($link);
    }

    // Close the result set
    mysqli_free_result($result);

    // Perform the search in the 'walletpayment' table
$walletResult = mysqli_query($link, "SELECT * FROM walletpayment");

// Check for errors in the query execution
if ($walletResult) {
    if (mysqli_num_rows($walletResult) > 0) {
        $walletRow = mysqli_fetch_assoc($walletResult); // Fetch the first row
    } else {
        echo "<p>No results found in 'walletpayment' table.</p>";
    }
} else {
    echo "ERROR: Could not execute wallet query. " . mysqli_error($link);
}

// Close the result set
mysqli_free_result($walletResult);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Information</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #C8C2C2;">

<div class="container">
    <div class="row">
        <div class="col-sm-12 col-md-8 col-lg-6 mx-auto mt-4">
            <div class="card" style="width: 100%;">
                <!-- Image and Barcode Image -->
   
                
                <div class="row">
                <div class="col-8 col-sm-6 text-center">
    <?php if (isset($walletRow['image'])) : ?>
        <img src="<?php echo $walletRow['image']; ?>" class="mt-4 img-fluid" >
    <?php else : ?>
        <p>Image Not Available</p>
    <?php endif; ?>
</div>

<div class="col-4 col-sm-6">
    <?php if (isset($walletRow['barcodeimge'])) : ?>
        <img src="<?php echo $walletRow['barcodeimge']; ?>" class="mt-4 img-fluid" alt="Barcode Image">
    <?php else : ?>
        <p>Barcode Image Not Available</p>
    <?php endif; ?>
</div>

</div>

               

                <!-- Wallet Title and Wallet -->
                <div class="card-body">
                <?php if (isset($walletRow['addresstitle'])) : ?>
        <h5 class="card-title"><?php echo $walletRow['addresstitle']; ?></h5>
    <?php else : ?>
        <h5 class="card-title">Address Title Not Available</h5>
    <?php endif; ?>

                    <div class="mb-3">
                        <p class="card-text">Tracking No:</p>
                        <?php
                        // Display tracking ID if found
                        $trackId = $row["trackid"];
                        if (isset($row["trackid"])) {
                            echo "<input class='form-control' type='text' value='{$row["trackid"]}' aria-label='Disabled input example' disabled readonly>";
                        } else {
                            echo "<p>No tracking information available.</p>";
                        }
                        ?>
                    </div>

                    <div class="mb-3">
                        <p class="card-text">Amount:</p>
                        <?php
                        // Display amount if found
                        if (isset($row["amount"])) {
                            echo "<input class='form-control' type='text' value='$" . $row["amount"] . "' aria-label='Disabled input example' disabled readonly>";
                        } else {
                            echo "<p>No amount information available.</p>";
                        }
                        ?>
                    </div>

                    <!-- Fetch wallet information -->
                    <div class="mb-3">
                        <p class="card-text">Wallet:</p>
                        <input class="form-control" type="text" value="<?php echo isset($walletRow['wallet']) ? $walletRow['wallet'] : ''; ?>" aria-label="Disabled input example" disabled readonly>
                    </div>


                    
                    <form action="uploadimage.php?trackId=<?php echo urlencode($searchTrackId); ?>" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <label for="uploadedFile" class="form-label">Upload Payment:</label>
                            <input type="file" class="form-control" id="file" name="file" aria-label="File input">
                        </div>

                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
