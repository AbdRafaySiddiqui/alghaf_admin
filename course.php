<?php
include "header.php";

?>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>Courses</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
        <li class="breadcrumb-item">Course</li>
        <!-- <li class="breadcrumb-item active">General</li> -->
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#basicModal" style="background-color: #008CBA; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Course</button><br><br>
    <?php

if(isset($_POST['btnSubmit']))
{
    $coursecode=$_POST['coursecode'];
    $name=$_POST['name'];
    $section=$_POST['section'];
    $professor=$_POST['professor'];

    $query1="insert into course( coursecode, name, section, professor)values('$coursecode','$name','$section','$professor')";
    $result1=mysqli_query($conn,$query1);
    if($result1)
    {
      echo "<script>alert('Course Added Successfully')</script>";
//       header("Location:periods.php");       
    }else{
         echo mysqli_error($conn);

//        echo "<script>alert('Some Error Occured')</script>";
    }
} 
?>
    <div class="modal fade" id="basicModal" tabindex="-1">
      <div class="modal-dialog">
        <form method="POST">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Create New Course</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <div class="row mb-3">
                <label for="coursecode" class="col-sm-6 col-form-label">Course Code</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="coursecode" required>
                </div>
              </div>


              <div class="row mb-3">
                <label for="name" class="col-sm-6 col-form-label">Name</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="name" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="section" class="col-sm-6 col-form-label">Section</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="section" required>
                </div>
              </div>

              <div class="row mb-3">
                <label for="professor" class="col-sm-6 col-form-label">Professor</label>
                <div class="col-sm-12">
                <select name="professor" class="form-control">
				<?php
        $querytype="Select * from professor";
        $resulttype=mysqli_query($conn,$querytype);
        
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

            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary"  name="btnSubmit">
            </div>
          </div>
        </form>
      </div>
    </div><!-- End Basic Modal-->

    <div class="modal fade" id="Modaledit" tabindex="-1">
      <div class="modal-dialog">
        <form method="POST" id="course-formedit">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title">Edit  Course</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="row mb-3">
                <label for="name" class="col-sm-6 col-form-label">Name</label>
                <div class="col-sm-12 ">
                <!-- <input type="text" class="form-control" name="ideditcourse" id="ideditcourse"> -->
                  <input type="text" class="form-control" name="name" value="<?php echo $row2[1];?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="section" class="col-sm-6 col-form-label">Section</label>
                <div class="col-sm-12">
                  <input type="text" class="form-control" name="section" value="<?php echo $row2[2];?>">
                </div>
              </div>

              <div class="row mb-3">
                <label for="professor" class="col-sm-6 col-form-label">Professor</label>
                <div class="col-sm-12">
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


            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <input type="submit" class="btn btn-primary" value="Edit Course" name="btnSubmitcourseedit">
            </div>
          </div>
        </form>
      </div>
</div>









    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <!-- <h5 class="card-title">Default Table</h5> -->

            <!-- Default Table -->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">COURSE CODE</th>
                  <th scope="col">NAME</th>
                  <th scope="col">SECTION</th>
                  <th scope="col">PROFESSOR</th>
                  <th scope="col">ACTION</th>
                </tr>
              </thead>
              <tbody>

                <?php
                $no =0;
                $querygetcourse = mysqli_query($conn, "select * from course");
                while ($allcourse = mysqli_fetch_array($querygetcourse)) {
                  $no++;
                ?>
                  <tr>
                    <th scope="row"><?php echo $no?></th>
                    <td><?php echo $allcourse[1]?></td>
                    <td><?php echo $allcourse[2]?></td>
                    <td><?php echo $allcourse[3]?></td>
            <?php
                    $querytype="select * from professor where id=".$allcourse['professor'];
                    $resulttype=mysqli_query($conn,$querytype);
                    $rowtype=mysqli_fetch_row($resulttype);
                    echo"<td>".$rowtype[1]."</td>";
?>
<?php                echo "<td><a href='deletecourse.php?id=".$allcourse['id']."'>Delete</a> <a href='editcourse.php?id=".$allcourse['id']."'>Update</a> </td>";

?>
                  
                  <?php } ?>
                  </tr>
                  <!-- <td><a href="#"><button style="border-radius: 20px; color:white; background: aqua;">Update</button></a> <a href="#"><button style="border-radius: 20px; color:white; background: blue;">Delete</button></a></td> -->

              </tbody>
            </table>
            <!-- End Default Table Example -->
          </div>
        </div>





      </div>

    </div>
  </section>

</main><!-- End #main -->
<?php
include "footer.php";
?>
<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.0/dist/sweetalert2.all.min.js"></script>
<script type="text/javascript">
  $(document).ready(function() {
    // alert("ASAB GAND DO GAI?");
    $('#course-form').on('submit', function(e) { //Don't foget to change the id form
      $.ajax({
        url: 'crud.php', //===PHP file name====
        data: $(this).serialize(),
        type: 'POST',
        success: function(data) {
          console.log(data);
          //Success Message == 'Title', 'Message body', Last one leave as it is
          new swal("Success!", "Course Added!", "success");
          $('#basicModal').modal('hide');

        },
        error: function(data) {
          //Error Message == 'Title', 'Message body', Last one leave as it is
          new swal("Oops...", "Something went wrong :(", "error");
        }
      });
      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    });
  });
</script>

<script>
function editcourse(id,code,name){
  $('#Modaledit').modal('show');
        document.getElementById('coursecodeedit').value=code;
        document.getElementById('nameofcourseedit').value=name;
        document.getElementById('ideditcourse').value=id;

        
}

</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('#course-formedit').on('submit', function(e) {
    
       //Don't foget to change the id form
      $.ajax({
        url: 'crud1.php', //===PHP file name====
        data: $(this).serialize(),
        type: 'POST',
        success: function(data) {
          // console.log(data);
          //Success Message == 'Title', 'Message body', Last one leave as it is
          new swal("Success!", "Course Edit!", "success");
          $('#Modaledit').modal('hide');
         // alert(data);
        },
        error: function(data) {
          //Error Message == 'Title', 'Message body', Last one leave as it is
          new swal("Oops...", "Something went wrong :(", "error");
        }
      });
      e.preventDefault(); //This is to Avoid Page Refresh and Fire the Event "Click"
    });
  });
</script>
<!-- ======= Footer ======= -->