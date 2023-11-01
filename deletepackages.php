<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from packages where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:packages.php');
}else{
    echo "Failed";
}

?>