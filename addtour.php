<?php
include "conn.php";

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Add Tours</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Tours</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    <?php

$querytype="Select * from status";
$resulttype=mysqli_query($conn,$querytype);


if(isset($_POST['btnSubmit']))
{
    $name=$_POST['name'];
    $price=$_POST['price'];
    $des=$_POST['des'];
    $status=$_POST['status'];
    $imageName=$_FILES['img']['name']; //database

    $target='img/'.basename($imageName);
    if(move_uploaded_file($_FILES['img']['tmp_name'],$target))
    {
    $query1="insert into packages( name, price, des, status, image )values('$name','$price','$des','$status','$imageName')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
//      echo "<script>alert('Assign Added Successfully')</script>";
       header("Location:tours.php");       
    }else{
         echo mysqli_error($conn);

//        echo "<script>alert('Some Error Occured')</script>";
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
                  <label for="price" class="col-sm-6 col-form-label">Price</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="price" required>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="des" class="col-sm-6 col-form-label">Description</label>
                  <div class="col-sm-10">
                    <textarea name="des" class="form-control" required>

                    </textarea>
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="status" class="col-sm-6 col-form-label">Status</label>
                  <div class="col-sm-10">
                  <select name="status" class="form-control">
				<?php
					while($rowtype=mysqli_fetch_array($resulttype))
						{
				?>
						    <option value=<?php echo $rowtype['id'];?>>
               	<?php echo $rowtype['name'];?>
            				</option>
                <?php
                        }
                ?>
										</select>
                  </div>
                </div>


                <div class="row mb-3">
                  <label for="image" class="col-sm-6 col-form-label">Image</label>
                  <div class="col-sm-10">
                    <input type="file" class="form-control" name="img" id="FilUploader" multiple required>
                  </div>
                </div>

                <!-- <div class="row mb-3">
                  <label for="periodtime" class="col-sm-6 col-form-label">Time Period</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="periodtime">
                  </div>
                </div> -->

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