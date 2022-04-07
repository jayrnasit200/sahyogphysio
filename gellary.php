<?php
include_once 'layouts/header.php';
include_once 'functions.php';
include_once 'database.php';
// get gellary

$sqlget = "SELECT * FROM gellary WHERE `status`='show'";
$alldata = mysqli_query($conn, $sqlget);
?>
  
   <div style="min-height: 80vh;">
   	 <div class="wrapper">
    <!-- filter Items -->
    <nav>
      <div class="items">
        <span class="item active" data-name="all">All</span>
        <span class="item" data-name="physio">Physio</span>
        <span class="item" data-name="aerobics">Aerobics</span>
        <span class="item" data-name="yoga">Yoga</span>
        <span class="item" data-name="other">Other</span>

        <!-- <span class="item" data-name="camera">Video</span> -->
      </div>
    </nav>
    <!-- filter Images -->
    <div class="gallery">
    <?php
          if (mysqli_num_rows($alldata) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($alldata)) {
                // print_r($row['img']);
                // exit;
              echo '<div class="image" data-name="'.$row['type'].'">'.
              '<a data-lightbox="example-set" href="'. gethost() .$row['img'].'" ><img src="'. gethost() .$row['img'].'" alt=""></a>'.
           ' </div>';
              }
          }
    ?>
    
    </div>
  </div>

   </div>
   <?php
include_once 'layouts/footer.php';
?>