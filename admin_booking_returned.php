<?php

include('db_con.php');
$carid=$_GET['id'];
$book_id=$_GET['bookid'];
$sql2="SELECT *from booking where BOOK_Id=$book_id";
$result2=mysqli_query($conn,$sql2);
$res2 = mysqli_fetch_assoc($result2);
$sql="SELECT *from cars where CAR_ID=$carid";
$result=mysqli_query($conn,$sql);
$res = mysqli_fetch_assoc($result);

if($res['AVAILABLE']=='Y')
{
    header("Location: admin_dash.php?val=NOTAPP");
}
else{
    
    $sql4="UPDATE cars set AVAILABLE='Y' where CAR_ID=$res[CAR_ID]";
    $query2=mysqli_query($conn,$sql4);
    $sql5="UPDATE booking set BOOK_STATUS='RETURNED' where BOOK_ID=$res2[BOOK_ID]";
    $query=mysqli_query($conn,$sql5);

    header("Location: admin_dash.php?val=APP");
    
}  



?>