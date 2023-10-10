<?php
$title = "sum";
include('./includes/header.php');
?>

<body>

    <div id="page-wrapper">


        <!-- Preloader -->
        <?php include('./includes/index_preloader.php'); ?>
        <!-- END Preloader -->


        <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">


            <!-- Alternative Sidebar -->
            <?php include('./includes/index_alternative_sidebar.php'); ?>
            <!-- END Alternative Sidebar -->


            <!-- Main Sidebar -->
            <?php
            $active = "Categories_add";
            include('./includes/index_main_sidebar.php');
            ?>
            <!-- END Main Sidebar -->


            <!-- Main Container -->
            <div id="main-container">


                <!-- Header -->
                <?php include('./includes/index_header.php'); ?>
                <!-- END Header -->


                <!-- Page content -->
                <div id="page-content">
                    <!-- eCommerce Categories Add Header -->
                    <?php
                    $act = "Categories_Add";
                    include('./includes/page_ecom_dashboard_header.php');
                    ?>
                    <!-- END eCommerce Categories Add Header -->

                    <!-- Categories add Content -->
                    <div class="row">

                        <div class="col-lg-6">
                            <!-- Categories Data Block -->
                            <div class="block">
                                <!-- Categories Data Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-pencil"></i> <strong>Categories</strong> Data</h2>
                                </div>
                                <!-- END Categories Data Title -->

                                <!-- Categories Data Content -->
                                <form action="#" method="post"
                                    class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="Categories-title">Categories
                                            ID</label>
                                        <div class="col-md-9">
                                            <input type="text" id="Categories-ID" name="Categories-title"
                                                class="form-control" placeholder="Enter Categories ID..">
                                            <div class="help-block">55 Characters Max</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="">Categories
                                            Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="Categories-Name" name="Categories-Name"
                                                class="form-control" placeholder="Name">
                                        </div>
                                    </div>
                                    <div class="form-group form-actions">
                                        <div class="col-md-9 col-md-offset-3">
                                            <button type="submit" class="btn btn-sm btn-primary"><i
                                                    class="fa fa-floppy-o"></i> Save</button>
                                            <button type="reset" class="btn btn-sm btn-warning"><i
                                                    class="fa fa-repeat"></i> Reset</button>
                                        </div>
                                    </div>
                                </form>
                                <!-- END Meta Data Content -->
                            </div>
                            <!-- END Meta Data Block -->
                        </div>
                        <div class="col-lg-6">
                            <!-- All Categories Block -->
                            <div class="block full">
                                <!-- All Categories Title -->
                                <div class="block-title">
                                    <h2><strong>All</strong> Categories</h2>
                                </div>
                                <!-- END All Categories Title -->

                                <!-- All Categories Content -->
                                <table id="ecom-Categories" class="table table-bordered table-striped table-vcenter">
                                    <thead>
                                        <tr>
                                            <th class="text-center" style="width: 70px;">ID</th>
                                            <th>Categories Name</th>
                                            <th class="hidden-xs text-center">Added</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="text-center"><a
                                                    href="#"><strong>PID.8799</strong></a>
                                            </td>
                                            <td><a href="#">Categories #99</a></td>
                                            <td class="hidden-xs text-center">03/10/2014</td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-xs">
                                                    <a href="#" data-toggle="tooltip"
                                                        title="Edit" class="btn btn-default"><i
                                                            class="fa fa-pencil"></i></a>
                                                    <a href="javascript:void(0)" data-toggle="tooltip" title="Delete"
                                                        class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END All Categories Content -->
                            </div>
                            <!-- END All Categories Block -->
                        </div>

                    </div>
                    <!-- END Categories add Content -->
                </div>
                <!-- END Page Content -->


                <!-- Footer -->
                <?php include('./includes/index_footer.php'); ?>
                <!-- END Footer -->


            </div>
            <!-- END Main Container -->
        </div>
        <!-- END Page Container -->
    </div>
    <!-- END Page Wrapper -->

    <!-- ================ footer Section start Here =============== -->

    <?php include('./includes/footer.php'); ?>

    <!-- ================ footer Section end Here =============== -->


    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="js/helpers/ckeditor/ckeditor.js"></script>
</body>

</html>