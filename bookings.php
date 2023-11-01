<?php
include "header.php";
include "conn.php";
$query="select * from booking";
$result=mysqli_query($conn,$query);

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Booking</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Booking</li>
          <!-- <li class="breadcrumb-item active">General</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <a href='addbooking.php'><button  style="background-color: #008CBA; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Booking</button></a><br><br>

      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <!-- <h5 class="card-title">Default Table</h5> -->

              <!-- Default Table -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Package</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Contact Number</th>
                    <th scope="col">Date</th>
                    <th scope="col">Message</th>
                    <th scope="col">Persons</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <?php while($row=mysqli_fetch_array($result))


        {
          $sqql="SELECT * FROM `packages`";
          $rresult=mysqli_query($conn,$sqql);
          $rrow=mysqli_fetch_assoc($rresult);

        echo "<tr>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$rrow['name']."</td>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['number']."</td>";
        echo"<td>".$row['date']."</td>";
        echo"<td>".$row['message']."</td>";
        echo"<td>".$row['persons']."</td>";
        echo "<td><a href='deletebooking.php?id=".$row['id']."'>Delete</a> <a href='editbooking.php?id=".$row['id']."'>Update</a> </td>";
        echo "</tr>";
        }
        ?>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>





        </div>

      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
<?php
include "footer.php";
?>