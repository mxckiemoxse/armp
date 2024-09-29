<?php
$servername = "localhost";
$username = "root";
$password = "12345678";

$con = new mysqli($servername,$username,$password);

if ($con->connect_error){
    die("connect failed:". $con->connect_error);
}
echo "success"
?>