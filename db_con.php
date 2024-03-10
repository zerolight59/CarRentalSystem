<?php
$conn = mysqli_connect('localhost', 'root', '', 'carproject');

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
?>
