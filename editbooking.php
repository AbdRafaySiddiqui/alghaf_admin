<?php
include "conn.php";
$id=$_GET['id'];  // getting id from url
$query2="select * from booking where id=".$id;  //getting data from product table based on given id
$result2=mysqli_query($conn,$query2); //executing query
$row2=mysqli_fetch_row($result2);  //fetching data
if(isset($_POST['btnSubmit']))
{  
    $name=$_POST['name'];
    $email=$_POST['email'];
    $number=$_POST['number'];
    $date=$_POST['date'];
    $person=$_POST['person'];
    $msg=$_POST['msg'];
    $query1="update booking set name='$name', email='$email', number='$number', date='$date', persons='$person', message='$msg' where id='$id'";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
        header("Location:bookings.php");
    }else{
        echo mysqli_error($conn);
    }
}
include "header.php";
?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Update Booking</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item active">Update Booking</li>
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
                  <label for="email" class="col-sm-6 col-form-label">Email</label>
                  <div class="col-sm-10">
                    <input type="email" class="form-control" name="email" value="<?php echo $row2[2];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="number" class="col-sm-6 col-form-label">Contact Number</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" name="number" value="<?php echo $row2[3];?>">
                  </div>
                </div>
                
                <div class="row mb-3">
                  <label for="date" class="col-sm-6 col-form-label">Date</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" name="date" value="<?php echo $row2[4];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="person" class="col-sm-6 col-form-label">Persons</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" name="person" value="<?php echo $row2[6];?>">
                  </div>
                </div>

                <div class="row mb-3">
                  <label for="msg" class="col-sm-6 col-form-label">Message</label>
                  <div class="col-sm-10">
                  <textarea name="msg" class="form-control" >

                  </textarea>
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