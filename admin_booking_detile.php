<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Postcard Design</title>
  <style>

.postcard {
  display: flex; /* Divide postcard into two sections */
  width: 600px; /* Adjust width as needed */
  background-color: #f5f5f5;
  border: 1px solid #ddd;
  padding: 20px;
  border-radius: 5px;
  justify-content: center;
  align-items: center;
}


.left-side{
    flex: .40;
}
.right-side {
  flex: .60; /* Make both sides equal width */
}

.left-side {
  text-align: center;
}

.profile-pic {
  width: 150px; /* Adjust profile picture size */
  height: 150px;
  border-radius: 50%; /* Create a circular profile picture */
  margin-bottom: 10px; /* Add margin below image */
}

.right-side {
  padding-left: 20px; /* Add padding for better spacing */
}

.right-side h1 {
  margin-top: 0; /* Remove top margin for title */
}

.car-image {
  width: 100%; /* Make car image full width */
  margin-top: 20px; /* Add margin above image */
}

  </style>

</head>
<body>
    <?php include('admin_navbar.php');
    $id=$_GET['id'];
    $sql="SELECT * FROM booking JOIN cars ON cars.CAR_ID = booking.CAR_ID and `BOOK_ID` = $id";
    // echo $sql;
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    ?>
  <div class="postcard">
    <div class="left-side">
        <img src="images\<?php echo $row['CAR_IMG']?>" alt="Car Image" class="car-image">
        <ul>
            <li>CAR ID: <?php echo $row['CAR_ID'] ?></li>
            <li>CAR NAME: <?php echo $row['CAR_NAME'] ?></li>
        </ul>
    </div>
    <div class="right-side">
        <img src="profile_pic.jpg" alt="Profile Picture" class="profile-pic"> 
        <ul>
            <li>book id: <?php echo $row['BOOK_ID'] ?></li>
            <li>EMAIL:<?php echo $row['EMAIL'] ?> </li>
            <li>PH NO:<?php echo $row['PHONE_NUMBER'] ?></li>
            <li><?php echo $row['BOOK_DATE'] . " - " . $row['RETURN_DATE']; ?></li>
            <li>DURATION:<?php echo $row['DURATION'] ?></li>
            <li>Destination :<?php echo $row['DESTINATION'] ?></li>
            <li>UPDATE BOOK STATUS :
            <button type="submit"  class="but"  name="approve"><a href="admin_booking_approve.php?id=<?php echo $row['BOOK_ID']?>">APPROVE</a></button>
            <button type="submit" class="but" name="approve"><a href="admin_booking_returned.php?id=<?php echo $row['CAR_ID']?>&bookid=<?php echo $row['BOOK_ID']?>">RETURNED</a></button>
            </li>


        </ul>  
    </div>
  </div>
</body>
</html>
