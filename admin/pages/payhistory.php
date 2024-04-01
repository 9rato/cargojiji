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
<body>
<div class="main-content">
    <div class="container mt-5">
        <h2>Payment Table</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Track ID</th>
                    <th>Amount</th>
                    <th>Status</th>
                    <th>Date</th>
                    <th>Email</th>
                    <th>Image</th>
                </tr>
            </thead>
            <tbody>

                <?php
                // Fetch data from the 'inpayment' table
                $sql = "SELECT * FROM inpayment";
                $result = mysqli_query($link, $sql);

                // Display data in the table
                if ($result !== false && mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        // Determine the status based on the 'statuspay' column
                        $status = '';
                        if ($row['status'] == 1) {
                            $status = 'Approve';
                        } elseif ($row['status'] == 0) {
                            $status = 'Disapprove';
                        } else {
                            $status = 'Pending';
                        }

                        // Assuming 'image' column contains the file name in your folder
                        $imageFileName = $row['image'];
                        $imagePath = "{$imageFileName}";

                        // Inside the while loop
                        echo "<tr>
                        <td>{$row['id']}</td>
                        <td>{$row['trackid']}</td>
                        <td>{$row['amount']}</td>
                        <td>{$status}</td>
                        <td>{$row['date']}</td>
                        <td>{$row['email']}</td>
                        <td><img src='{$imagePath}' alt='Status Image' data-toggle='modal' data-target='#imageModal' data-image='{$imagePath}' style='max-width: 50px; max-height: 50px; cursor: pointer;'></td>
                        </tr>";

                    }
                } else {
                    echo "<tr><td colspan='7'>No records found</td></tr>";
                }

                // Close the result set
                mysqli_free_result($result);

                // Close the database connection
                mysqli_close($link);
                ?>

            </tbody>
        </table>
    </div>



    
</div>


<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="imageModalLabel">Image Preview</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img src="" id="modalImage" class="img-fluid" alt="Image Preview">
      </div>
    </div>
  </div>
</div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
  $(document).ready(function () {
    $('#imageModal').on('show.bs.modal', function (event) {
      var image = $(event.relatedTarget).data('image');
      $('#modalImage').attr('src', image);
    });
  });
</script>
