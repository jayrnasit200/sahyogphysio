<?php
include '../functions.php';
include 'layouts/header.php';
include '../database.php';
?>

    <section class="content">
      <div class="container-fluid">


        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-primary">
              <span class="info-box-icon"><i class="fas fa-boxes"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total sliders</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * from sliders";
                    if ($result = mysqli_query($conn, $sql)) 
                    {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                        // Display result
                         echo $rowcount;
                    }
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-success">
              <span class="info-box-icon"><i class="fas fa-user-friends"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Users</span>
                <span class="info-box-number"><?php
                    $sql = "SELECT * from users";
                    if ($result = mysqli_query($conn, $sql)) 
                    {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                        // Display result
                         echo $rowcount;
                    }
                ?></span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="info-box mb-3 bg-warning">
              <span class="info-box-icon"><i class="fas fa-user-tag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total blogs</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * from blogs";
                    if ($result = mysqli_query($conn, $sql)) 
                    {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                        // Display result
                         echo $rowcount;
                    }
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="info-box mb-3 bg-danger">
              <span class="info-box-icon"><i class="ion ion-bag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total appointment</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * from book_appoitment";
                    if ($result = mysqli_query($conn, $sql)) 
                    {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                        // Display result
                         echo $rowcount;
                    }
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-default">
              <span class="info-box-icon"><i class="fas fa-hand-holding-usd"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total contacts </span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * from contacts";
                    if ($result = mysqli_query($conn, $sql)) 
                    {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                        // Display result
                         echo $rowcount;
                    }
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">
            <div class="info-box mb-3 bg-secondary">
              <span class="info-box-icon"><i class="ion ion-bag"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total Gellary</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * from gellary";
                    if ($result = mysqli_query($conn, $sql)) 
                    {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                        // Display result
                         echo $rowcount;
                    }
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

          <div class="col-lg-3 col-6">

            <div class="info-box mb-3 bg-dark">
              <span class="info-box-icon"><i class="fa fa-list-alt"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Total product</span>
                <span class="info-box-number">
                  <?php
                    $sql = "SELECT * from products";
                    if ($result = mysqli_query($conn, $sql)) 
                    {
                        // Return the number of rows in result set
                        $rowcount = mysqli_num_rows( $result );
                        // Display result
                         echo $rowcount;
                    }
                ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
          </div>

         

        </div>
    </section>
    <?php include 'layouts/footer.php';?>
