<?php
include "conn.php";
$id=$_GET['id'];  // getting id from url
$UserQuery="select * from professor";  //getting data from product table based on given id
$UserResult=mysqli_query($conn,$UserQuery); //executing query

$query2="select * from course where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    $coursecode=$_POST['coursecode'];
    $name=$_POST['name'];
    $section=$_POST['section'];
    $professor=$_POST['professor'];
   
    $query1="update course set coursecode='$coursecode', name='$name', section='$section', professor='$professor' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        header("Location:course.php");
    }else{
        echo mysqli_error($conn);
    }
}
include "header.php";
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Course</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Update Course</li>
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
                  <label for="coursecode" class="col-sm-6 col-form-label">Course Code</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="coursecode" value="<?php echo $row2[1];?>">
                  </div>
                </div>


            <div class="row mb-3">
                  <label for="name" class="col-sm-6 col-form-label">Name</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" value="<?php echo $row2[2];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="section" class="col-sm-6 col-form-label">Section</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="section" value="<?php echo $row2[3];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="Professor" class="col-sm-6 col-form-label">Professor</label>
                  <div class="col-sm-10">
                  <select name="professor">
                  <?php
        while($UserRow=mysqli_fetch_array($UserResult))
        {
            if($UserRow["id"]==$QuestRow['id'])
            {
            ?>
            <option value="<?php echo $UserRow['id'];?>" selected>
            <?php echo $UserRow['name'];?>
            </option>
            <?php
            }
            else {
                ?>
            <option value="<?php echo $UserRow['id'];?>">
            <?php echo $UserRow['name'];?>
            </option>
        <?php
        }
    }
        ?>										</select>
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