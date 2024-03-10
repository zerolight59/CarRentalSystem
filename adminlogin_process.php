<?php
include('db_con.php');

// Get username and password from login form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $sql = "SELECT * FROM admin WHERE ADMIN_ID = '$username' AND ADMIN_PASSWORD = '$password'";
        echo $sql;
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
                // Login successful
                $_SESSION["username"] = $username;
                header("Location: admin_dash.php");
        } else {
                // Login failed
                echo "Invalid username or password";
        }
}
