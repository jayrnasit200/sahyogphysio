<?php
include_once 'layouts/header.php';
include_once 'functions.php';
include_once 'database.php';
// get gellary

$sqlget = "SELECT * FROM blogs WHERE `status`='show'";
$alldata = mysqli_query($conn, $sqlget);
// print_r($alldata);
//                 exit;
?>
   

<div class="up1">
  <div class="up2">
    <div class="up3">
      <h1>update page</h1>
    </div>
    <?php
          if (mysqli_num_rows($alldata) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($alldata)) {
                // print_r($row);
                // exit;
                echo '<div class="up4">'.
                '<div class="card">'.
                  '<div class="up5">'.
                    '<img src="'. gethost() .$row['img'].'">'.
                  '</div>'.
                  '<div class="up6">'.
                    '<h1>'.substr($row['titele'],1 , 15).'..</h1>'.
                   ' <p>'.substr($row['description'],1 , 140).'..</p>'.
                  '</div>'.
                  '<div class="botton">'.
                    '<a href="#">Read more</a>'.
                 ' </div>'.
                '</div>' .
              '</div>';
              }
          }
    ?>
    <!-- <div class="up4">
      <div class="card">
        <div class="up5">
          <img src="image/u2.jpg">
        </div>
        <div class="up6">
          <h1>chia seed</h1>
          
          <p>helpful for weight loss<br>important for women</p>
        </div>
        
        <div class="botton">
          <a href="contact.html">Read more</a>
        </div>
        
      </div> 
    </div> -->
  

  </div>
</div>
<?php
include_once 'layouts/footer.php';
?>