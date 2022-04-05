<?php 
include_once '../database.php';
include '../functions.php';
if ($_POST) {
    // print_r();
    // exit;
    $id= $_POST['update_id'];
    $cdate= get_current();
    $sql = "UPDATE book_appoitment SET status='approved',updated_at='$cdate' WHERE id='" . $id . "'";
 
    if (mysqli_query($conn, $sql)) {
        header('Location: book_appoitment_list.php?code=200&message= update successfully.');
    } else {
         $e_message = "Error: " . $sql . mysqli_error($conn);
        header('Location: book_appoitment_list.php?code=400&message='.$e_message);
    }
}
// get data
$id= $_GET['id'];
// $sqlget = "SELECT * FROM `book_appoitment` WHERE `id`='" . $id . "'";
$sqlget = "SELECT  t1.id, t2.email ,t2.name , t2.phone,t1.time, t1.date, t1.type,t1.d_name, t1.status, t1.created_at
FROM book_appoitment t1
INNER JOIN users t2 ON t1.user_id = t2.id
WHERE t1.id ='" . $id . "'";
$data = mysqli_fetch_assoc(mysqli_query($conn, $sqlget));
if (empty($data['id'])) {
    header('Location: book_appoitment_list.php?code=400&message=Data Not Found.');
}
// print_r($sqlget);
// exit;
include 'layouts/header.php';
?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Book Appoitment</h1>
            </div>
        </div>
    </div>
</section>
    <!-- Main content -->
  <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="col-md-12">
                <div class="card card-default">
                    <div class="card-header">
                        <h3 class="card-title">Book Appoitment</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-right m-2">
                            <!-- <a href="gellary_create.php" class="btn btn-primary"><i class="fa fa-plus"></i> </a> -->
                        </div>
                        <table border="1" style="width: 100%;">
                            <tr>
                                <th style="width:50%;">Name</th>
                                <td><?php echo $data['name'];?></td>
                            </tr>
                            <tr>
                                <th style="width:50%;">Phone</th>
                                <td><?php echo $data['phone'];?></td>
                            </tr>
                            <tr>
                                <th style="width:50%;">Email</th>
                                <td><?php echo $data['email'];?></td>
                            </tr>
                            
                            <tr>
                                <th style="width:50%;">Date</th>
                                <td><?php echo $data['date'];?></td>
                            </tr>
                            <tr>
                                <th style="width:50%;">Time</th>
                                <td><?php echo $data['time'];?></td>
                            </tr>
                            <tr>
                                <th style="width:50%;">Type</th>
                                <td><?php echo $data['type'];?></td>
                            </tr>
                            <tr>
                                <th style="width:50%;">Status</th>
                                <td><?php echo $data['status'];?></td>
                            </tr>
                            
                            <tr>
                                <th style="width:50%;">DR name</th>
                                <td><?php echo $data['d_name'];?></td>
                            </tr>
                            <tr>
                                <th style="width:50%;">created Date</th>
                                <td><?php echo $data['created_at'];?></td>
                            </tr>

                        </table>
                        
                        <div class=" float-right m-2">
                        <form method="post">
                            <input type="hidden" name="update_id" value="<?php echo $data['id'];?>">
                            <input type="submit" value="Approved" class="btn btn-success">
                            <!-- <input type="submit" value="Rejected" class="btn btn-secondary"> -->
                        </form>
                        </div>
                    </div>
                    <!-- <div class="card-footer">Visit for more examples and information about the plugin.</div> -->
                </div>
                <!-- /.card -->
            </div>
        </div>
    </section>
    <!-- /.container-fluid -->

    <?php include 'layouts/footer.php';?>

