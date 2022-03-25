<?php include 'layouts/header.php';?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Blogs</h1>
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
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                <th>#</th>
                                    <td>Titele</td>
                                    <td>Images</td>
                                    <td>status</td>
                                    <td>
                                        <a href="blogs_edit.php?id=1" class="btn btn-info"><i class='fas fa-pencil-alt'></i></a>
                                        <a href="#" class="btn btn-danger"><i class="fas fa-trash-restore-alt"></i></a>
                                    </td>
                                </tr>
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

