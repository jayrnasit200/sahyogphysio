<?php 
include_once '../database.php';
 include '../functions.php';
if($_POST)
{	 
    $cdate= get_current();
    $name = $_POST['name'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . date("Ymd_his") . rand(1111,9999) .'.'. basename($_FILES["image"]["type"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	$tempname = $_FILES["image"]["tmp_name"];
    $imgpath = substr($target_file, 2);
    $type=$_POST['type'];
    if (move_uploaded_file($tempname, $target_file))  {
        $msg = "Image uploaded successfully";
        
        $sql = "INSERT INTO gellary (name,img,type,status,created_at,updated_at)
        VALUES ('$name','$imgpath','$type','show','$cdate','$cdate')";
        // print_r($sql);
        // exit;
        if (mysqli_query($conn, $sql)) {
            header('Location: gellary_list.php?code=200&message=Slider Add successfully.');
        } else {
             $e_message = "Error: "  . mysqli_error($conn);
            header('Location: gellary_list.php?code=400&message='.$e_message);
        }
        
    }
    
}
include 'layouts/header.php';
?>
 <!-- Content Header (Page header) -->
 <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Gellary </h1>
                    </div>
                  
                </div>
            </div>
       
</section>
<section class="content">
    <div class="row">
        <div class="col-md-6">
            <div class="card card-default">
                <div class="card-header">
                    <h3 class="card-title">Gellary</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                    </div>
                </div>

                <form method="post" enctype="multipart/form-data">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" name="name" class="form-control" required placeholder="Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Type</label>
                            <div>
                                <label><input type="radio" name="type" value="physio" > physio</label>
                                <label><input type="radio" name="type" value="aerobics"> aerobics</label>
                                <label><input type="radio" name="type" value="yoga"> yoga</label>
                                <label><input type="radio" name="type" value="other"> other</label>
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                                    <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg"  id="file" onchange="previewImage();"  name="image" placeholder="Enter Name" value="">
                        </div>
                             <b>NOTE: Banner image size required 1180X620.</b>


                    </div>
                    <div class="card-footer con">
                        <a href="{{ url('product/type/sub_type') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>

            </div>
        </div>
        <div class="col-md-5">
            <div class="card card-default">
               <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPvlmYJUQmx55XV7mD_INQCHIA1NXMrXuE8A&usqp=CAU" id="preview" class="img-fluid img-thumbnail">
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
