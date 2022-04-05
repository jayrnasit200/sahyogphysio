<?php 
include_once '../database.php';
include '../functions.php';
// get data
$id= $_GET['id'];
$sqlget = "SELECT * FROM `blogs` WHERE `id`='" . $id . "'";
$data = mysqli_fetch_assoc(mysqli_query($conn, $sqlget));
if (empty($data['id'])) {
    header('Location: blogs_list.php?code=400&message=Data Not Found.');
}
// update data
if ($_POST) {
    // print_r( $_POST);
    // exit;
    $cdate= get_current();
    $titele = $_POST['Titele'];
    $status = $_POST['Status'];
    $imgname = $_POST['img'];
    $description=$_POST['description'];
    if (!empty($_FILES)) {
      
        $target_dir = "../uploads/";
        $target_file = $target_dir . date("Ymd_his") . rand(1111,9999) .'.'. basename($_FILES["new_image"]["type"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
        $tempname = $_FILES["new_image"]["tmp_name"];
        $imgpath = substr($target_file, 2);
        if (move_uploaded_file($tempname, $target_file))  {
            $imgname = $imgpath;
        } 
    }

    $sql = "UPDATE blogs SET titele='$titele',img='$imgname',status='$status',description='$description',updated_at='$cdate' WHERE id='" . $id . "'";
    if (mysqli_query($conn, $sql)) {
        header('Location: blogs_list.php?code=200&message=Slider Add successfully.');
    } else {
         $e_message = "Error: " . $sql . mysqli_error($conn);
        header('Location: blogs_list.php?code=400&message='.$e_message);
    }
//    print_r( $_FILES);
//    print_r( $_POST);
//     exit; 
}
// print_r( $data);
//     exit;
include 'layouts/header.php';
?>
 <!-- Content Header (Page header) -->
 <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Blog </h1>
                    </div>
                  
                </div>
            </div>
       
</section>
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Blog</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Titele</label>
                            <input type="text" name="Titele" class="form-control" value="<?php echo $data['titele']; ?>" required placeholder="Titele  ">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description </label>
                            <textarea name="description"  class="form-control" rows="15"><?php echo $data['description'];  ?></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Status</label>
                            <div>
                                <label><input type="radio" name="Status" value="show" <?php if ($data["status"] == 'show') { echo 'checked'; } ?> > Show</label>
                                <label><input type="radio" name="Status" value="hide" <?php if ($data["status"] == 'hide') { echo 'checked'; } ?>> Hide</label>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                                    <input type="hidden" name="img" value="<?php echo $data['img'];  ?>">
                                    <input type="file" class="form-control" id="file" onchange="previewImage();"  name="newimage" placeholder="Enter Name" value="{{ old('image') }}">
                        </div>
                        <div class="card card-default">
                        <?php
                            if ($data['img']) {
                            echo '<img src="'. gethost() .$data['img'].'" id="preview" class="img-fluid img-thumbnail">';
                            }else{
                            echo '<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPvlmYJUQmx55XV7mD_INQCHIA1NXMrXuE8A&usqp=CAU" id="preview" class="img-fluid img-thumbnail">';
                            }
                        ?>
                            </div>


                    </div>
                    <div class="card-footer con">
                        <a href="#" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
         
    </div>
</section>
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
