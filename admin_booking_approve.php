<?php
include('db_con.php');
$bookid = $_GET['id'];
$sql = "SELECT * FROM booking WHERE BOOK_Id = $bookid";
$result = mysqli_query($conn, $sql);
$res = mysqli_fetch_assoc($result);
$car_id = $res['CAR_ID'];
$sql2 = "SELECT * FROM cars WHERE CAR_ID = $car_id";
$carres = mysqli_query($conn, $sql2);
$carresult = mysqli_fetch_assoc($carres);
$email = $res['EMAIL'];
$carname = $carresult['CAR_NAME'];

echo $carresult['AVAILABLE'];

if ($carresult['AVAILABLE'] == 'Y') {
    if ($res['BOOK_STATUS'] == 'APPROVED' || $res['BOOK_STATUS'] == 'RETURNED') {
        header("Location: admin_dash.php?val=ALL");
    } else {
        $query = "UPDATE booking SET BOOK_STATUS='APPROVED' WHERE BOOK_ID = $bookid";
        $queryy = mysqli_query($conn, $query);
        $sql2 = "UPDATE cars SET AVAILABLE='N' WHERE CAR_ID = $res[CAR_ID]";
        $query2 = mysqli_query($conn, $sql2);
        header("Location: admin_dash.php?val=APP");
    }
} else {
    header("Location: admin_dash.php?VAL=NOTAPP");
}
?>
