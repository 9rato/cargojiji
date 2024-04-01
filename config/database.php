<?php

/* Database credentials */
define('DB_SERVER', 'localhost:3306');
define('DB_USERNAME', 'multilinksbase_shippings');
define('DB_PASSWORD', 'shipping123@');
define('DB_NAME', 'multilinksbase_frightcargo');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
} else {
    echo "";
}

?>
