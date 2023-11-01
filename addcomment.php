<?php
include "conn.php";

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Comment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Comment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
<?php

if(isset($_POST['btnSubmit']))
{
    $comment=$_POST['comment'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $web=$_POST['web'];
    $query1="insert into comments( comment, name, email, website)values('$comment','$name','$email','$web')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
//      echo "<script>alert('Assign Added Successfully')</script>";
       header("Location:comments.php");       
    }else{
         echo mysqli_error($conn);

//        echo "<script>alert('Some Error Occured')</script>";
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
                  <label for="comment" class="col-sm-6 col-form-label">Comment</label>
                  <div class="col-sm-10">
                    <textarea name="comment" class="form-control" required>

                    </textarea>
                  </div>
                </div>

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
                  <label for="web" class="col-sm-6 col-form-label">Website</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="web" required>
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