<?php
include "conn.php";

if (isset($_POST['btnSubmitcourse'])) {

  $queryinsert = mysqli_query($conn, "insert into course (code, name) VALUES ('" . $_POST['coursecode'] . "','" . $_POST['nameofcourse'] . "')");
  echo '<script>swal("Oops...", "Invalid credentials!", "error");</script>';
} 
if ($_POST['btnSubmitcourseedit']) {

    $queryedit = mysqli_query($conn, "update course set code='".$_POST['coursecodeedit']."',name='".$_POST['nameofcourseedit']."' WHERE id='".$_POST['ideditcourse']."'");
    return $queryedit;
  } 



?>