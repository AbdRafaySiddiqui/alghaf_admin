<?php
include "conn.php";

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Images</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Images</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php

if(isset($_POST['btnSubmit']))
{

    $totalfiles = count($_FILES['file']['image']);
    for($i=0;$i<$totalfiles;$i++){
       $filename = $_FILES['file']['image'][$i];
    
      // Upload files and store in database
      if(move_uploaded_file($_FILES["file"]["tmp_name"][$i],'upload/'.$filename)){
              // Image db insert sql
             $insert1 = "INSERT INTO `images`(`image`, `packageid`) VALUES ('$packageid','$filename')";
             
             $iquery = mysqli_query($connection,$insert1);
    
    }
                   
          else{
              echo 'Error in uploading file - '.$_FILES['file']['name'][$i].'<br/>';
          }
    
       }
      }
include "header.php";
?>
    <section class="section">
    <form method="POST" enctype="multipart/form-data">

      <div class="row">

              <!-- End Quill Editor Default -->
              <div class="row">
        <div class="col-lg-12">
        <div class="card">
            <div class="card-body">

            <div class="row mb-3">
                  <label for="name" class="col-sm-6 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-sm-6 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="number" class="col-sm-6 col-form-label">Contact Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="number" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="date" class="col-sm-6 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="person" class="col-sm-6 col-form-label">Persons</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="person">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="msg" class="col-sm-6 col-form-label">Message</label>
                  <div class="col-sm-10">
                    <textarea name="msg" class="form-control" required>

                    </textarea>
                  </div>
                </div>

<input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  >

</div>
</div>  
</div>


              </form><!-- Vertical Form -->

    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php
include "footer.php";
?>