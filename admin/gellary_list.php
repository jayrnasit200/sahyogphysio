<?php include 'layouts/header.php';?>
<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Gellary</h1>
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
                        <h3 class="card-title">Gellary</h3>

                        <div class="card-tools">
                            <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-minus"></i></button>
                            <button type="button" class="btn btn-tool" data-card-widget="remove"><i class="fas fa-remove"></i></button>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-right m-2">
                            <a href="gellary_create.php" class="btn btn-primary"><i class="fa fa-plus"></i> </a>
                        </div>
                        <table id="myTable" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>image</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#</td>
                                    <td>Name</td>
                                    <td>image</td>
                                    <td>status</td>
                                    <td>
                                        <a href="gellary_edit.php?id=1" class="btn btn-info"><i class="fas fa-pencil-alt"></i></a>
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

