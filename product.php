<?php
include_once 'layouts/header.php';
include_once 'functions.php';
include_once 'database.php';
// get gellary

$sqlget = "SELECT * FROM products WHERE `status`='show'";
$alldata = mysqli_query($conn, $sqlget);
// print_r($alldata);
//                 exit;
?>
<div class="ps1">
  <div class="ps2">
    <div class="ps3">
      <h1>Product page</h1>
    </div>
    
    <?php
          if (mysqli_num_rows($alldata) > 0) {
              // output data of each row
              while($row = mysqli_fetch_assoc($alldata)) {
                // print_r($row);
                // exit;
                echo  '<div class="ps4">'.
                '<div class="card">'.
                  '<div class="ps5">'.
                    '<img src="'.gethost().$row['img'].'" alt="'.$row['name'].'">'.
                  '</div>'.
                  '<div class="ps6">'.
                    '<h1>'.substr($row['name'],1 , 15).'..</h1>'.
                    '<p>'.substr($row['description'],1 , 140).'..</p>'.
                  '</div>'.
                  '<div class="botton">'.
                   ' <a data-toggle="modal" data-target="#myModal1">Read more</a>'.
                  '</div>'.
                  
                '</div>' .
              '</div>'.
              '<!-- Modal -->'.
              ' <div class="modal fade" id="myModal1" role="dialog">'.
                  ' <div class="modal-dialog">'.
                       '<!-- Modal content-->'.
                       '<div class="modal-content">'.
                           '<div class="modal-header">'.
                               '<button type="button" class="close" data-dismiss="modal">&times;</button>'.
                               '<h4 class="modal-title">'.$row['name'].'</h4>'.
                          ' </div>'.
                           '<div class="modal-body">'.
                             '  <img src="'.gethost().$row['img'].'" alt="'.$row['name'].'">'.
                              ' <p>'.$row['description'].'</p>'.
                           '</div>'.
                          ' <div class="modal-footer">'.
                          ' <a class="btn btn-default" href="contact.php">Contact us</a>'.
                          ' </div>'.
                       '</div>'.
                   '</div>'.
               '</div>'.
               '<!-- end model -->'.
             '</div>';
               
              }
          }
    ?>
    

    
    

  </div>
</div>
<?php
include_once 'layouts/footer.php';
?>