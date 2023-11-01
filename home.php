<?php
include "header.php";
include "conn.php";

?>
  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">


              <div class="card-body">
                  <h5 class="card-title">Packages</h5>
                  <?php
                            $count="SELECT count( * ) as  name FROM packages";
                            $result=mysqli_query($conn,$count);
                            while($row=mysqli_fetch_array($result))
                            {
                        ?>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                      <h6><?php echo $row['name'];?> <?php } ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


              <div class="card-body">
                  <h5 class="card-title">Tours</span></h5>
                  <?php
                            $count="SELECT count( * ) as  name FROM tours";
                            $result=mysqli_query($conn,$count);
                            while($row=mysqli_fetch_array($result))
                            {
                        ?>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                    <h6><?php echo $row['name'];?> <?php } ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


              <div class="card-body">
                  <h5 class="card-title">Comments</span></h5>
                  <?php
                            $count="SELECT count( * ) as  name FROM comments";
                            $result=mysqli_query($conn,$count);
                            while($row=mysqli_fetch_array($result))
                            {
                        ?>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                    <h6><?php echo $row['name'];?> <?php } ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">


              <div class="card-body">
                  <h5 class="card-title">Booking</span></h5>
                  <?php
                            $count="SELECT count( * ) as  name FROM booking";
                            $result=mysqli_query($conn,$count);
                            while($row=mysqli_fetch_array($result))
                            {
                        ?>

                  <div class="d-flex align-items-center">
                    <div class="ps-3">
                    <h6><?php echo $row['name'];?> <?php } ?></h6>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->



            <!-- Customers Card -->
            <!-- <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
          
              </div>
            </div> -->
            <!-- End Customers Card -->

            <!-- Reports -->

            <!-- Recent Sales -->

            <!-- Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->

      </div>
    </section>

  </main><!-- End #main -->

<?php
include "footer.php";
?>