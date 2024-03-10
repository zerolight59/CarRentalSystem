<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
</head>
<style>
.admin-header {
  display: flex;
  justify-content: space-between;
  align-items: center;
  padding: 10px 20px;
  background-color: #f0f0f0;
}

.logo {
  font-size: 1.2rem;
  font-weight: bold;
}

.admin-nav {
  display: flex;
  flex-direction: row;
  background-color: red;
  list-style: none;
  margin: 0;
  padding: 0;
}

.nav-div-ele{
  background-color: #f1f1f1;
  width: 100px;
  margin: 10px;
  text-align: center;
  line-height: 75px;
  font-size: 30px;
}


.admin-nav a {
  text-decoration: none;
  color: #333;
}

.logout-btn {
  background-color: #333;
  color: white;
  padding: 5px 10px;
  border: none;
  border-radius: 3px;
  cursor: pointer;
}

.logout-btn:hover {
  background-color: #444;
}

</style>
<body>
    <?php include('db_con.php') ?>
  <header class="admin-header">
    <div calss="admin-nav-logo">
        <a href="admin_dash.php">
        <img src="images\Open Road Rentals_transparent.png" alt="logo" width="200" hight="50">
        </a>
    </div>
    <nav class="admin-nav">

      <div class="nav-div-ele"><a href="#" >carst</a></div>
      <div class="nav-div-ele"><a href="#" >users</a></div>
      <div class="nav-div-ele"><a href="#" >bookings</a></div>

    </nav>
    <div calss="admin-nav-logout">
    <a href="#" class="logout-btn">Logout</a>
    </div>
  </header>
  </body>
</html>
