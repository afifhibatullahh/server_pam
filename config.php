
<?php

error_reporting(0);

$host = "localhost";
$user = "root";
$pass = "";
$db   = "recipe_app";

// Creating connection.
$con = mysqli_connect($host,$user,$pass,$db);

if(!$con){
    echo "gagal konek";
}
 
?>