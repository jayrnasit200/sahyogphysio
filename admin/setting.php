<?php 
include_once '../database.php';
include '../functions.php';
$sqlget = "SELECT * FROM `web_config` WHERE `id`='1'";
$data = mysqli_fetch_assoc(mysqli_query($conn, $sqlget));
// print_r($data);
// exit;
if ($_POST) {
    $cdate= get_current();
    // $site_name = $_POST['site_name'];
    // $copyright_text = $_POST['copyright_text'];
    // $imgname = $_POST['logo'];
    $t_branch=$_POST['t_branch'];
    $t_employees=$_POST['t_employees'];
    $t_customer=$_POST['t_customer'];
    // $phone=$_POST['phone'];
    // $address=$_POST['address'];
    // if (!empty($_FILES['new_logo'])) {
      
    //     $target_dir = "../uploads/";
    //     $target_file = $target_dir . date("Ymd_his") . rand(1111,9999) .'.'. basename($_FILES["new_logo"]["type"]);
    //     $uploadOk = 1;
    //     $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    //     $tempname = $_FILES["new_logo"]["tmp_name"];
    //     $imgpath = substr($target_file, 2);
    //     if (move_uploaded_file($tempname, $target_file))  {
    //         $imgname = $imgpath;
    //     } 
    // }

    $sql = "UPDATE web_config SET t_branch='$t_branch',t_employees='$t_employees',t_customer='$t_customer' WHERE id='1'";
    if (mysqli_query($conn, $sql)) {
        header('Location: index.php?code=200&message=Update successfully.');
    } else {
        echo $e_message = "Error: " . $sql . mysqli_error($conn);
        // header('Location: index.php?code=400&message='.$e_message);
    }
//    print_r( $_FILES);
//    print_r( $_POST);
//     exit; 
}
include 'layouts/header.php';
?>
 <!-- Content Header (Page header) -->
 <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Setting </h1>
                    </div>
                  
                </div>
            </div>
        
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Setting</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Site Name</label>
                            <input type="text" name="site_name" class="form-control" value="<?php echo $data['site_name']; ?>" required placeholder="Site Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Copyright Text</label>
                            <input type="text" name="copyright_text" class="form-control" value="<?php echo $data['copyright_text']; ?>"  required placeholder="Copyright Text">
                        </div> -->

                        <div class="form-group">
                            <label for="exampleInputEmail1">Number Branch</label>
                            <input type="text" name="t_branch" class="form-control" value="<?php echo $data['t_branch']; ?>"  required placeholder="Number Branch">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Number Employees</label>
                            <input type="text" name="t_employees" class="form-control" value="<?php echo $data['t_employees']; ?>"  required placeholder="Number Employees">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Number Customer</label>
                            <input type="text" name="t_customer" class="form-control" value="<?php echo $data['t_customer']; ?>"  required placeholder="Number Customer">
                        </div>

                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="phone" class="form-control" value="<?php echo $data['phone']; ?>"  required placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea name="address"  class="form-control" rows="3" placeholder="Address"><?php echo $data['address']; ?></textarea>
                        </div> -->

                        <!-- <div class="form-group">
                            <label for="exampleInputEmail1">Logo</label>
                            <input type="hidden" name="logo" value="<?php echo $data['logo']; ?>">
                                    <input type="file" class="form-control" id="file" onchange="previewImage();"  name="new_logo" placeholder="Enter Name" value="{{ old('image') }}">
                        </div> -->


                    </div>
                    <div class="card-footer con">
                        <a href="#" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-default">
            <?php
                    if (get_logo()) {
                       echo '<img src="' .get_logo().'" id="preview" class="img-fluid img-thumbnail">';
                    }else{
                       echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPvlmYJUQmx55XV7mD_INQCHIA1NXMrXuE8A&usqp=CAU" id="preview" class="img-fluid img-thumbnail">';
                    }
                ?>
            </div>
        </div>
    </div>
</section>
</div>
   
  <script>
        function previewImage() {
            var file = document.getElementById("file").files;
            if (file.length > 0) {
                var fileReader = new FileReader();

                fileReader.onload = function (event) {
                    document.getElementById("preview").setAttribute("src", event.target.result);
                };

                fileReader.readAsDataURL(file[0]);
            }
        }
    </script>

<?php include 'layouts/footer.php';?>
