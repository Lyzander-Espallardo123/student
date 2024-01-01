<?php
$servername ="localhost";
$username ="id21734464_admin";
$password = "P!0YK_HSZY-Pgsp";
$dname = "id21734464_student";

$con = mysqli_connect($servername, $username, $password, $dname);

if(!$con){
    die("connection Failed" . mysqli_connect_error());
}
//echo "Connected Successfully";
