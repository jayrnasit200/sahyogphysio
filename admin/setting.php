<?php include 'layouts/header.php';?>
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

                <form method="post" enctype="multipart/form-data" action="banners/add">
                    <div class="card-body">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Site Name</label>
                            <input type="text" name="site_name" class="form-control" required placeholder="Site Name">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Copyright Text</label>
                            <input type="text" name="copyright_text" class="form-control" required placeholder="Copyright Text">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Number Branch</label>
                            <input type="text" name="number_branch" class="form-control" required placeholder="Number Branch">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Number Employees</label>
                            <input type="text" name="number_employees" class="form-control" required placeholder="Number Employees">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Number Customer</label>
                            <input type="text" name="number_customer" class="form-control" required placeholder="Number Customer">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Phone</label>
                            <input type="text" name="phone" class="form-control" required placeholder="Phone">
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Address</label>
                            <textarea name="address"  class="form-control" rows="3" placeholder="Address"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="exampleInputEmail1">Logo</label>
                                    <input type="file" class="form-control" id="file" onchange="previewImage();"  name="logo" placeholder="Enter Name" value="{{ old('image') }}">
                        </div>


                    </div>
                    <div class="card-footer con">
                        <a href="{{ url('product/type/sub_type') }}" class="btn btn-default">Cancel</a>
                        <button type="submit" class="btn btn-primary">Update</button>
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
