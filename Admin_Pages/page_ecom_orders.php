<?php
session_start();

// Make sure you are logged in 
include('./includes/logged_in.php');
?>

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
                $active= "Orders"; 
                include('./includes/index_main_sidebar.php'); 
                ?>
                <!-- END Main Sidebar -->

                <!-- Main Container -->
                <div id="main-container">
                    <!-- Header -->
                    <!-- In the PHP version you can set the following options from inc/config file -->
                    <!--
                        Available header.navbar classes:

                        'navbar-default'            for the default light header
                        'navbar-inverse'            for an alternative dark header

                        'navbar-fixed-top'          for a top fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar())
                            'header-fixed-top'      has to be added on #page-container only if the class 'navbar-fixed-top' was added

                        'navbar-fixed-bottom'       for a bottom fixed header (fixed sidebars with scroll will be auto initialized, functionality can be found in js/app.js - handleSidebar()))
                            'header-fixed-bottom'   has to be added on #page-container only if the class 'navbar-fixed-bottom' was added
                    -->


                    <!-- Header -->
                    <?php include('./includes/index_header.php');?>
                    <!-- END Header -->


                    <!-- Page content -->
                    <div id="page-content">
                        <!-- eCommerce Orders Header -->
                        <?php 
                        $act= "Orders"; 
                        include('./includes/page_ecom_dashboard_header.php');
                        ?>
                        <!-- END eCommerce Orders Header -->

                        <!-- Quick Stats -->
                        <div class="row text-center">
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background">
                                        <h4 class="widget-content-light"><strong>Pending</strong> Orders</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 animation-expandOpen">3</span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Orders</strong> Today</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">120</span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Orders</strong> This Month</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">3.200</span></div>
                                </a>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <a href="javascript:void(0)" class="widget widget-hover-effect2">
                                    <div class="widget-extra themed-background-dark">
                                        <h4 class="widget-content-light"><strong>Orders</strong> Last Month</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">2.850</span></div>
                                </a>
                            </div>
                        </div>
                        <!-- END Quick Stats -->

                        <!-- All Orders Block -->
                        <div class="block full">
                            <!-- All Orders Title -->
                            <div class="block-title">
                                <h2><strong>All</strong> Orders</h2>
                            </div>
                            <!-- END All Orders Title -->

                            <!-- All Orders Content -->
                            <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;">ID</th>
                                        <th class="visible-lg">Customer</th>
                                        <th class="text-center visible-lg">QTY</th>
                                        <th class="hidden-xs">Discount</th>
                                        <th class="text-right hidden-xs">Value</th>
                                        <th>Status</th>
                                        <th class="hidden-xs text-center">Submitted</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.685198</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$251,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">27/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.php" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.685197</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$2240,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">28/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.php" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.685196</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$832,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">18/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.php" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.php"><strong>ORD.685166</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg">1</td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$1356,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">09/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.php" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- END All Orders Content -->
                        </div>
                        <!-- END All Orders Block -->
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
        <script src="js/pages/ecomOrders.js"></script>
        <script>$(function(){ EcomOrders.init(); });</script>
    </body>
</html>