<?php 
$title ="sum";
include('./includes/header.php'); 
?>
    <body>


            <!-- Preloader -->
            <?php include('./includes/index_preloader.php'); ?>
            <!-- END Preloader -->


            <div id="page-container" class="sidebar-partial sidebar-visible-lg sidebar-no-animations">


                <!-- Alternative Sidebar -->
                <?php include('./includes/index_alternative_sidebar.php'); ?>
                <!-- END Alternative Sidebar -->


                <!-- Main Sidebar -->
                <?php 
                $active= "products"; 
                include('./includes/index_main_sidebar.php');
                ?>
                <!-- END Main Sidebar -->


                <!-- Main Container -->
                <div id="main-container">


                    <!-- Header -->
                    <?php include('./includes/index_header.php');?>
                    <!-- END Header -->


                    <!-- Page content -->
                    <div id="page-content">
                        <!-- eCommerce Products Header -->
                        <?php 
                        $act= "Product"; 
                        include('./includes/page_ecom_dashboard_header.php');
                        ?>
                        <!-- END eCommerce Products Header -->

                        <!-- Quick Stats -->
                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="page_ecom_product_add.php" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-success">
                                        <h4 class="widget-content-light"><strong>Add New</strong> Product</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i class="fa fa-plus"></i></span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-danger">
                                        <h4 class="widget-content-light"><strong>Out of</strong> Stock</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 text-danger animation-expandOpen">71</span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Top</strong> Sellers</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">20</span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>All</strong> Products</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">4.982</span></div>
                                </a>
                            </div>
                        </div>
                        <!-- END Quick Stats -->

                        <!-- All Products Block -->
                        <div class="block full">
                            <!-- All Products Title -->
                            <div class="block-title">
                                <h2><strong>All</strong> Products</h2>
                            </div>
                            <!-- END All Products Title -->

                            <!-- All Products Content -->
                            <table id="ecom-products" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 70px;">ID</th>
                                        <th>Product Name</th>
                                        <th class="text-right hidden-xs">Price</th>
                                        <th class="hidden-xs">Status</th>
                                        <th class="hidden-xs text-center">Added</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8799</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #99</a></td>
                                        <td class="text-right hidden-xs"><strong>$899,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-success">Available (7)</span>
                                        </td>
                                        <td class="hidden-xs text-center">03/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.php" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_product_edit.html"><strong>PID.8797</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Product #97</a></td>
                                        <td class="text-right hidden-xs"><strong>$618,00</strong></td>
                                        <td class="hidden-xs">
                                            <span class="label label-danger">Out of Stock</span>
                                        </td>
                                        <td class="hidden-xs text-center">21/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_product_edit.php" data-toggle="tooltip" title="Edit" class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END All Products Content -->
                        </div>
                        <!-- END All Products Block -->
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


        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/ecomProducts.js"></script>
        <script>$(function(){ EcomProducts.init(); });</script>
    </body>
</html>