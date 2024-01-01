<?php

$sname= "localhost";
$uname= "id21734464_admin";
$password= "P!0YK_HSZY-Pgsp";

$db_name = "id21734464_student";

$conn = mysqli_connect($sname, $uname, $password, $db_name);

if(!$conn) {
    echo "Connection failed!";
}

?>