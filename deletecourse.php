<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from course where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:course.php');
}else{
    echo "Failed";
}

?>