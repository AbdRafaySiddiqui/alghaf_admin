<?php
include "conn.php";

    $getauto=mysqli_query($conn,"SELECT auto_increment FROM INFORMATION_SCHEMA.TABLES WHERE table_name = 'professor'");
    $get_row_pro=mysqli_fetch_row($getauto);
    $row=$get_row_pro[0];
    $queryedit = mysqli_query($conn, "INSERT INTO professor(name, unavailable_period) VALUES ('".$_POST['name_professor']."','".$_POST['period']."')");
    $insert_course_professor=mysqli_query($conn,"INSERT INTO course_professor(course_id, professor_id) VALUES ('".$_POST['coursedd']."','$row')");

  


?>