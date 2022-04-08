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
                    '<a data-toggle="modal" data-target="#myModal'.$row['id'].'">Read more</a>'.
                 ' </div>'.
                '</div>' .
                '<!-- Modal -->'.
               ' <div class="modal fade" id="myModal'.$row['id'].'" role="dialog">'.
                   ' <div class="modal-dialog">'.
                        '<!-- Modal content-->'.
                        '<div class="modal-content">'.
                            '<div class="modal-header">'.
                                '<button type="button" class="close" data-dismiss="modal">&times;</button>'.
                                '<h4 class="modal-title">'.$row['titele'].'</h4>'.
                           ' </div>'.
                            '<div class="modal-body">'.
                              '  <img src="'.gethost().$row['img'].'" style="max-width: 100%;" alt="'.$row['titele'].'">'.
                               ' <p>'.$row['description'].'</p>'.
                            '</div>'.
                           ' <div class="modal-footer">'.
                                '<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>'.
                           ' </div>'.
                        '</div>'.
                    '</div>'.
                '</div>'.
                '<!-- end model -->'.
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