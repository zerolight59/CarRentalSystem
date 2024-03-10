<?php
include('db_con.php');

// Get username and password from login form
$username = $_POST["username"];
$password = $_POST["password"];


// Prepare a SQL statement to select admins
$sql = "SELECT * FROM admin WHERE ADMIN_ID = '$username' AND ADMIN_PASSWORD = '$password'";
echo $sql;
$result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
        // Login successful
        $_SESSION["username"] = $username;
        header("Location: admin_dash.php"); // Redirect to admin dashboard after successful login
        } 
        else {
        // Login failed
        echo "Invalid username or password";
        }

?>
