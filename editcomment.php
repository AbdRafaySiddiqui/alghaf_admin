<?php
include "conn.php";
$id=$_GET['id'];  // getting id from url
$query2="select * from comments where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    $comment=$_POST['comment'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $web=$_POST['web'];
    $query1="update comments set comment='$comment', name='$name', email='$email', website='$web' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        header("Location:comments.php");
    }else{
        echo mysqli_error($conn);
    }
}
include "header.php";
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Comment</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Update Comment</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
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
                    <input type="text" class="form-control" name="name" value="<?php echo $row2[2];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="email" class="col-sm-6 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?php echo $row2[3];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="web" class="col-sm-6 col-form-label">Website</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="web" value="<?php echo $row2[4];?>">
                  </div>
                </div>
                
                <input type="submit" value="Submit" name="btnSubmit" style="border-radius:10px; border-color:lightblue; margin-top:10px;"  >

                </div>


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