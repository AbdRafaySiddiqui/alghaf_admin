$totalfiles = count($_FILES['file']['name']);
for($i=0;$i<$totalfiles;$i++){
   $filename = $_FILES['file']['name'][$i];

  // Upload files and store in database
  if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'upload/'.$filename)){
          // Image db insert sql
         $insert1 = "INSERT INTO `employeecnic`(`image_type`, `ats_emp_id`, `imagename`) VALUES ('NIC-Pic','$emp_id_ag','$filename')";
         
         $iquery = mysqli_query($connection,$insert1);

}
         

         
      else{
          echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
      }

   }