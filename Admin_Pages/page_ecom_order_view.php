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
            $active = "order_view";
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
                    <!-- eCommerce Order View Header -->
                    <?php
                    $act = "Order_View";
                    include('./includes/page_ecom_dashboard_header.php');
                    ?>
                    <!-- END eCommerce Order View Header -->

                    <!-- Order Status -->
                    <div class="row text-center">
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <div class="widget-extra themed-background-success">
                                    <h4 class="widget-content-light"><strong>ORD.685195</strong></h4>
                                </div>
                                <div class="widget-extra-full"><span
                                        class="h2 text-success animation-expandOpen">15/10/2014</span></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <div class="widget-extra themed-background-success">
                                    <h4 class="widget-content-light"><i class="fa fa-paypal"></i>
                                        <strong>Payment</strong></h4>
                                </div>
                                <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i
                                            class="fa fa-check"></i></span></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <div class="widget-extra themed-background-warning">
                                    <h4 class="widget-content-light"><i class="fa fa-archive"></i>
                                        <strong>Packaging</strong></h4>
                                </div>
                                <div class="widget-extra-full"><span class="h2 text-warning"><i
                                            class="fa fa-refresh fa-spin"></i></span></div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget">
                                <div class="widget-extra themed-background-muted">
                                    <h4 class="widget-content-light"><i class="fa fa-truck"></i>
                                        <strong>Delivery</strong></h4>
                                </div>
                                <div class="widget-extra-full"><span class="h2 text-muted animation-pulse"><i
                                            class="fa fa-ellipsis-h"></i></span></div>
                            </div>
                        </div>
                    </div>
                    <!-- END Order Status -->

                    <!-- Products Block -->
                    <div class="block">
                        <!-- Products Title -->
                        <div class="block-title">
                            <h2><i class="fa fa-shopping-cart"></i> <strong>Products</strong></h2>
                        </div>
                        <!-- END Products Title -->

                        <!-- Products Content -->
                        <div class="table-responsive">
                            <table class="table table-bordered table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;">ID</th>
                                        <th>Product Name</th>
                                        <th class="text-center">QTY</th>
                                        <th class="text-right" style="width: 10%;">UNIT COST</th>
                                        <th class="text-right" style="width: 10%;">PRICE</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a
                                                href="page_ecom_product_edit.html"><strong>PID.8715</strong></a></td>
                                        <td><a href="page_ecom_product_edit.html">Xbox One</a></td>
                                        <td class="text-center"><strong>1</strong></td>
                                        <td class="text-right"><strong>$399,00</strong></td>
                                        <td class="text-right"><strong>$399,00</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right text-uppercase"><strong>Total Price:</strong>
                                        </td>
                                        <td class="text-right"><strong>$975,00</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right text-uppercase"><strong>Discount:</strong>
                                        </td>
                                        <td class="text-right"><strong>$975,00</strong></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4" class="text-right text-uppercase"><strong>Total VAT:</strong>
                                        </td>
                                        <td class="text-right"><strong>$975,00</strong></td>
                                    </tr>
                                    <tr class="active">
                                        <td colspan="4" class="text-right text-uppercase"><strong>Total Amount:</strong>
                                        </td>
                                        <td class="text-right"><strong>$0,00</strong></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- END Products Content -->
                    </div>
                    <!-- END Products Block -->

                    <!-- Addresses -->
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Billing Address Block -->
                            <div class="block">
                                <!-- Billing Address Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-building-o"></i> <strong>Billing</strong> Address</h2>
                                </div>
                                <!-- END Billing Address Title -->

                                <!-- Billing Address Content -->
                                <h4><strong>Jonathan Taylor</strong></h4>
                                <address>
                                    Sunset Str 620<br>
                                    Melbourne<br>
                                    Australia, 21-842<br><br>
                                    <i class="fa fa-phone"></i> (999) 852-11111<br>
                                    <i class="fa fa-envelope-o"></i> <a
                                        href="javascript:void(0)">johnathan.taylor@example.com</a>
                                </address>
                                <!-- END Billing Address Content -->
                            </div>
                            <!-- END Billing Address Block -->
                        </div>
                        <div class="col-sm-6">
                            <!-- Log Block -->
                            <div class="block">
                                <!-- Log Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-building-o"></i> <strong>Log</strong> Messages</h2>
                                </div>
                                <!-- END Log Title -->

                                <!-- Log Content -->
                                <div class="table-responsive">
                                    <table class="table table-bordered table-vcenter">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <span class="label label-primary">Order</span>
                                                </td>
                                                <td class="text-center">October 17, 2014 - 12:00</td>
                                                <td><a href="javascript:void(0)">Support</a></td>
                                                <td class="text-success"><i class="fa fa-fw fa-check"></i> <strong>Order
                                                        Completed</strong></td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <span class="label label-danger">Cancel</span>
                                                </td>
                                                <td class="text-center">October 16, 2014 - 09:10</td>
                                                <td><a href="javascript:void(0)">Support</a></td>
                                                <td class="text-danger"><i class="fa fa-fw fa-exclamation-triangle"></i>
                                                    <strong>Cancellation</strong></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- END Log Content -->
                            </div>
                            <!-- END Log Block -->
                        </div>
                    </div>
                    <!-- END Addresses -->




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

</body>

</html>