<?php 
include '../database.php';
include '../functions.php';
if($_POST){
    // print_r($_POST['delete_id']);
    // exit;
    $id = $_POST['delete_id'];

    $sqlget = "SELECT * FROM `blogs` WHERE `id`='" . $id . "'";
    $alldata = mysqli_fetch_assoc(mysqli_query($conn, $sqlget));
    @unlink(gethost().$alldata['img']);
    // print_r( gethost().$alldata['img']);
    // exit;
    $sqlget = "DELETE FROM blogs WHERE id='" . $id . "'";
    if (mysqli_query($conn, $sqlget)) {
        header('Location: blogs_list.php?code=200&message=Record deleted successfully.');
      } else {
        $error= "Error deleting record: " . mysqli_error($conn);
        header('Location: blogs_list.php?code=400&message='.$error);
      }
}
// get all data
$sqlget = "SELECT * FROM blogs";
$alldata = mysqli_query($conn, $sqlget);
// print_r(mysqli_fetch_assoc($alldata));
// exit;

include 'layouts/header.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blogs</h1>
            </div>
        </div>
          <?php 
        if(!empty($_GET['message'])) {
            $code = $_GET['code'];
            if($code= 200){
                echo '<div class="alert alert-success alert-dismissible" id="msg">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                '.$_GET['message'].'</div>';
            }else{
                echo '<div class="alert alert-danger alert-dismissible" id="msg">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
             '.$_GET['message'].'</div>';
            }
        }
        ?>
    </div>
</section>
    <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Blogs</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-right m-2">
                            <a href="blogs_create.php" class="btn btn-primary"><i class="fa fa-plus"></i> </a>
                        </div>
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Titele</th>
                                    <th>Images</th>
                                    <th>Description</th>
                                    <th>Status</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                               <?php
                            $no=1;
                                if (mysqli_num_rows($alldata) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($alldata)) {
                                    echo '<tr> <td>'.$no++.'</td>'.
                                    '<td>'.$row['titele'].'</td>'.
                                    '<td><img width="100" src="'. gethost() .$row['img'].'" alt="'.$row['titele'].'"></td>'.
                                    '<td>'.$row['description'].'</td>'.
                                    '<td>'.$row['status'].'</td>'.
                                    '<td>'.$row['created_at'].'</td>'.
                                    '<td>
                                        <a href="blogs_edit.php?id='.$row['id'].'" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
                                       
                                        <form method="post">
                                            <input type="hidden" name="delete_id" value='.$row['id'].'>
                                            <button class="btn btn-danger" name="submit"><i class="fas fa-trash-restore-alt"></i></button>
                                        </form>
                                    </td>'.
                                '</tr>';
                                    }
                                } else {
                                    echo "<tr>
                                    <td colspan='7' style='text-align: center;'>Data Not Found</td></tr>";
                                }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.container-fluid -->

    <?php include 'layouts/footer.php';?>

