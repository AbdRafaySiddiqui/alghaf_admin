<?php
include "header.php";
include "conn.php";
$query="select * from packages";
$result=mysqli_query($conn,$query);

?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Packages</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item">Packages</li>
          <!-- <li class="breadcrumb-item active">General</li> -->
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section">
    <a href='addpackages.php'><button  style="background-color: #008CBA; color: white; margin-left:5px; margin-top:5px; border-radius:10px;">Add Packages</button></a><br><br>

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
                    <th scope="col">Status</th>
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
        $querytype="select * from status where id=".$row['status'];
        $resulttype=mysqli_query($conn,$querytype);
        $rowtype=mysqli_fetch_row($resulttype);
        echo"<td>".$rowtype[1]."</td>";

        ?>
        <td><img alt="user" widht="50%" height="100px" src="img/<?php echo $row['image']?>"></td>
        <?php
        echo "<td><a href='deletepackages.php?id=".$row['id']."'>Delete</a> <a href='editpackages.php?id=".$row['id']."'>Update</a> </td>";
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