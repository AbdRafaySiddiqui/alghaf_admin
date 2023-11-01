<?php
include "conn.php";
$id=$_GET['id'];  // getting id from url
$query2="select * from tours where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    $name=$_POST['name'];
    $price=$_POST['price'];
    $desc=$_POST['desc'];
    $imageName=$_FILES['img']['name']; //database

    $target='img/tour/'.basename($imageName);
    if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
    {
    $query1="update tours set name='$name', price='$price', des='$desc', image='$imageName' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        header("Location:tours.php");
    }else{
        echo mysqli_error($conn);
    }
  }
}
include "header.php";
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Tours</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Update Tours</li>
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
                  <label for="name" class="col-sm-6 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?php echo $row2[1];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="price" class="col-sm-6 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" value="<?php echo $row2[2];?>">
                  </div>
                </div>
                <div class="row mb-3">
                  <label for="desc" class="col-sm-6 col-form-label">Description</label>
                  <div class="col-sm-10">
                  <textarea name="desc" class="form-control" ><?php echo $row2[3];?></textarea>
                </div>
                </div>

                <div class="row mb-3">
                  <label for="image" class="col-sm-6 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="img" id="FilUploader" required>
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