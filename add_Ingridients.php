<!DOCTYPE html>
<html lang="en">

<!-- Head -->
<?php
include_once 'include/head.php';
?>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <?php
        include_once 'include/preloader.php'
        ?>

        <!-- Navbar -->
        <?php
        include_once 'include/navbar.php'
        ?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <?php
        include_once 'include/sidebar.php'
        ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0"></h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">Add Ingridients</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->


            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- general form elements -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Add Ingridients </h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <form>
                                    <div class="card-body">
                                        <div class="form-group row">
                                            <div class="col-md-6">

                                                <label for="ing">Ingridient</label>
                                                <input type="text" class="form-control" id="ing" placeholder="Enter Ingridient">

                                            </div>
                                            <div class="col-md-6">
                                                <label for="sel1">Select Type:</label>
                                                <select class="form-control" id="sel1">
                                                    <option>Allergic</option>
                                                    <option>Normal</option>

                                                </select>
                                            </div>
                                        </div>




                                        <button type="submit" class="btn btn-primary float-right">Submit</button>
                                    </div>
                                    <!-- /.card-body -->


                                </form>
                            </div>
                            <!-- /.card -->


                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section>




            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->


        <?php
        include_once 'include/footer.php'
        ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- jQuery -->
    <?php
    include_once 'include/ex-links-includes.php'
    ?>

</body>

</html>