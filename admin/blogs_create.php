
<?php 
include_once '../database.php';
include '../functions.php';

 if ($_POST)
  {
    //    print_r($_FILES);
    //   exit;
    $cdata=get_current();
    $titele=$_POST['Titele'];
    $target_dir = "../uploads/";
    $target_file = $target_dir . date("Ymd_his") . rand(1111,9999) .'.'. basename($_FILES["image"]["type"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    $tempname = $_FILES["image"]["tmp_name"];
    $imgpath = substr($target_file, 2); 
    $description=$_POST['description'];
    // print_r(get_current());
      // exit;
    if (move_uploaded_file($tempname, $target_file))  {
        $msg = "Image uploaded successfully";
        
        $sql = "INSERT INTO blogs (titele,img,description,status,created_at,updated_at)
        VALUES ('$titele','$imgpath','$description','show','$cdata','$cdata')";
        if (mysqli_query($conn, $sql)) {
            header('Location: blogs_list.php?code=200&message=product Add successfully.');
        } else {
            echo "Error: " . $sql . mysqli_error($conn);
            // header('Location: blogs_list.php?code=400&message=Error: . $sql . mysqli_error($conn).');
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
                            <input type="text" name="Titele" required class="form-control" required placeholder="Titele  ">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Description </label>
                            <textarea name="description" required class="form-control" rows="15"></textarea>
                        </div>


                        <div class="form-group">
                            <label for="exampleInputEmail1">Image</label>
                                    <input type="file" class="form-control" accept="image/png, image/gif, image/jpeg" required id="file" onchange="previewImage();"  name="image" placeholder="Enter Name" value="">
                        </div>
                        <div class="card card-default">
                            <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPvlmYJUQmx55XV7mD_INQCHIA1NXMrXuE8A&usqp=CAU" id="preview" class="img-fluid img-thumbnail">
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
