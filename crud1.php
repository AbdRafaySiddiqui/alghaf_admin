<?php
include "conn.php";

    
    $queryedit = mysqli_query($conn, "update course set code='".$_POST['coursecodeedit']."',name='".$_POST['nameofcourseedit']."' WHERE id='".$_POST['ideditcourse']."'");
    return $queryedit;
  


?>