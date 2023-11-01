<?php
include "header.php";
include "conn.php";
$query="select * from packages WHERE status=1";
$result=mysqli_query($conn,$query);

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Tours</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="home.php">Home</a></li>
          <li class="breadcrumb-item">Tours</li>
          <!-- <li class="breadcrumb-item active">General</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <a href='addtour.php'><button  style="background-color: #008CBA; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Tour</button></a><br><br>

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
                    <th scope="col">Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Description</th>
                    <th scope="col">Image</th>
                    <th scope="col">ACTION</th>
                  </tr>
                </thead>
                <?php while($row=mysqli_fetch_array($result))
        {
        echo "<tr>";
        echo"<td>".$row['id']."</td>";
        echo"<td>".$row['name']."</td>";
        echo"<td>".$row['price']."</td>";
        echo"<td>".$row['des']."</td>";
        ?>
        <td><img alt="user" widht="50%" height="100px" src="img/<?php echo $row['image']?>"></td>
        <?php
        echo "<td><a href='deletetour.php?id=".$row['id']."'>Delete</a> <a href='edittour.php?id=".$row['id']."'>Update</a> </td>";
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