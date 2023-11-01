<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from booking where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:bookings.php');
}else{
    echo "Failed";
}

?>