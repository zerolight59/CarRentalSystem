<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style/admin_dash.css">
</head>
<body>
    <?php include('admin_navbar.php'); ?>
    
    <h1>Admin Dashboard</h1>
    
    <div class="admin-dash-table-div">
        <table class="content-table">
            <tr class="">
                <th>BOOK_ID</th>
                <th>CAR ID</th>
                <th>BOOK_PLACE</th>
                <th>BOOK_DATE</th>
                <th>DESTINATION</th>
                <th>BOOK_STATUS</th>
                <th>DETAILED VIEW</th>
            </tr>

            <?php
            $sql = "SELECT * FROM booking JOIN cars ON cars.CAR_ID = booking.CAR_ID";
            $result = mysqli_query($conn, $sql);

            while ($row = mysqli_fetch_assoc($result)) {
            ?>
                <tr class="active-row">
                    <td><?php echo $row['BOOK_ID']; ?></td>
                    <td><img src="images/<?php echo $row['CAR_IMG']; ?>" alt="car image"></td>
                    <td><?php echo $row['BOOK_PLACE']; ?></td>
                    <td><?php echo $row['BOOK_DATE']; ?></td>
                    <td><?php echo $row['DESTINATION']; ?></td>
                    <td><?php echo $row['BOOK_STATUS']; ?></td>
                    <td><a href="admin_booking_detail.php">view</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </div>
</body>
</html>
