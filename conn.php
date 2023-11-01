<?php
    
    $conn = mysqli_connect('localhost','root','','alghaf');

    if(!$conn){
        echo "Failed" . mysqli_error($conn);
    }


?>