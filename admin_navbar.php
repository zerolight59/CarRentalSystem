<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
    body {
        margin: 0;
    }

    .admin-header {
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 100px;
    }

    .admin-nav {
        margin: 10px;
        display: flex;
        justify-content: center;
        align-items: center;
        width: 100%;
        height: 90%;
        gap: 10px;
        padding: 5px;

    }

    .l-placement {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: flex-start;
        height: 100%;
    }

    .c-placement {
        flex: 1;
        display: flex;
        gap: 5px;
        align-items: center;
        justify-content: center;
        height: 100%;
    }

    .r-placement {
        flex: 1;
        display: flex;
        align-items: center;
        justify-content: flex-end;
        height: 100%;
    }
</style>

<body>
    <?php include('db_con.php')
    ?>
    <header class="admin-header">
        <nav class="admin-nav">
            <div class="l-placement">
                <div class="admin-nav-logo">
                    <a href="admin_dash.php">
                        <img src="images\Open Road Rentals_transparent.png" alt="logo" width="200" hight="50">
                    </a>
                </div>
            </div>
            <div class="c-placement">
                <div class="nav-div-ele"><a href="#">carst</a></div>
                <div class="nav-div-ele"><a href="#">users</a></div>
                <div class="nav-div-ele"><a href="#">bookings</a></div>
            </div>
            <div class="r-placement">

                <div calss="admin-nav-logout">
                    <a href="#" class="logout-btn">Logout</a>
                </div>
            </div>
        </nav>

    </header>


</body>

</html>