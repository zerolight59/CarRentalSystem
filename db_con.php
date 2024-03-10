<?php
$conn = mysqli_connect('localhost', 'root', '', 'carproject','3308');

if($conn->connect_error){
    die("connection failed: ".$conn->connect_error);
}
?>
