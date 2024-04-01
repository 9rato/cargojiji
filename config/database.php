<?php

/* Database credentials */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'cargojij_shipping');
define('DB_PASSWORD', 'cargojij_shipping');
define('DB_NAME', 'cargojij_shipping');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "";
}

?>
