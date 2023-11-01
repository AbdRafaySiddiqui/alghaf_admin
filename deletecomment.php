<?php
$id=$_GET['id'];
include 'conn.php';
$query="delete from comments where id='$id'";
$result=mysqli_query($conn,$query);
if($result)
{
    header('Location:comments.php');
}else{
    echo "Failed";
}

?>