<?php
 session_start();
if(isset($_SESSION['uid'])){
 
 
  include '../config/database.php';
  include '../config/config.php';
 include 'users_query.php';
  include '../header.php';
  $msg = "";

}
else{

    header("location:./pages/login.php");
}



?>