<?php
include "header.php";
include "conn.php";
$query="select * from comments";
$result=mysqli_query($conn,$query);

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Comments</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Comments</li>
          <!-- <li class="breadcrumb-item active">General</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <a href='addcomment.php'><button  style="background-color: #008CBA; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Comment</button></a><br><br>

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
                    <th scope="col">Comment</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Website</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <?php while($row=mysqli_fetch_array($result))
        {
          $sqli="SELECT * FROM `packages`";
          $output=mysqli_query($conn,$sqli);
          $rows=mysqli_fetch_assoc($output);


        echo "<tr>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$rows['name']."</td>";
        echo"<td>".$row['comment']."</td>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['email']."</td>";
        echo"<td>".$row['website']."</td>";
        echo "<td><a href='deletecomment.php?id=".$row['id']."'>Delete</a> <a href='editcomment.php?id=".$row['id']."'>Update</a> </td>";
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