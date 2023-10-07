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
                        <div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li>
                                    <a href="page_ecom_dashboard.html"><i class="fa fa-bar-chart"></i> Dashboard</a>
                                </li>
                                <li class="active">
                                    <a href="page_ecom_orders.html"><i class="gi gi-shop_window"></i> Orders</a>
                                </li>
                                <li>
                                    <a href="page_ecom_order_view.html"><i class="gi gi-shopping_cart"></i> Order View</a>
                                </li>
                                <li>
                                    <a href="page_ecom_products.html"><i class="gi gi-shopping_bag"></i> Products</a>
                                </li>
                                <li>
                                    <a href="page_ecom_product_edit.html"><i class="gi gi-pencil"></i> Product Edit</a>
                                </li>
                                <li>
                                    <a href="page_ecom_customer_view.html"><i class="gi gi-user"></i> Customer View</a>
                                </li>
                            </ul>
                        </div>
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
                                <div class="block-options pull-right">
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                </div>
                                <h2><strong>All</strong> Orders</h2>
                            </div>
                            <!-- END All Orders Title -->

                            <!-- All Orders Content -->
                            <table id="ecom-orders" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 100px;">ID</th>
                                        <th class="visible-lg">Customer</th>
                                        <th class="text-center visible-lg">Products</th>
                                        <th class="hidden-xs">Payment</th>
                                        <th class="text-right hidden-xs">Value</th>
                                        <th>Status</th>
                                        <th class="hidden-xs text-center">Submitted</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685199</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$1776,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">25/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685198</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$251,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">27/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685197</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$2240,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">28/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685196</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$832,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">18/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685195</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$1393,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">06/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685194</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$116,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">02/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685193</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$559,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">21/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685192</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Medina</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$2252,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">05/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685191</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$676,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">11/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685190</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$2027,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">25/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685189</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$440,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">21/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685188</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$340,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">11/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685187</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Anthony Franklin</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$1870,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">16/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685186</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$2346,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">07/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685185</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$1031,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">26/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685184</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$744,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">23/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685183</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Anthony Franklin</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1028,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">12/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685182</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$1152,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">12/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685181</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$244,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">17/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685180</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$447,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">15/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685179</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$393,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">02/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685178</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$2235,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">05/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685177</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Anthony Franklin</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$2180,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">22/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685176</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$145,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">01/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685175</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$973,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">06/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685174</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$722,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">23/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685173</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$2274,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">22/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685172</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$1772,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">11/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685171</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Medina</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$58,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">27/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685170</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$403,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">03/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685169</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$2149,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">16/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685168</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1074,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">02/08/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685167</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1130,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">01/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685166</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$1356,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">09/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685165</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$2194,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">16/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685164</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Anthony Franklin</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$2459,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">04/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685163</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1483,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">15/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685162</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$2420,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">08/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685161</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1558,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">17/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685160</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$1674,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">04/03/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685159</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$2120,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">03/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685158</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1197,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">06/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685157</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$626,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">05/07/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685156</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$651,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">03/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685155</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$335,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">27/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685154</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$1478,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">26/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685153</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1024,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">03/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685152</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Anthony Franklin</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$88,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">15/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685151</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$2084,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">20/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685150</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$864,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">20/12/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685149</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Patrick Bates</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$663,00</strong></td>
                                        <td><span class="label label-info">For delivery</span></td>
                                        <td class="hidden-xs text-center">24/01/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685148</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Medina</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">4</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1919,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">14/10/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685147</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Check</td>
                                        <td class="text-right hidden-xs"><strong>$2185,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">16/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685146</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$671,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">10/09/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685145</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Anthony Franklin</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$1167,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">09/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685144</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Harry Burke</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">3</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$1888,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">13/05/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685143</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$1642,00</strong></td>
                                        <td><span class="label label-danger">Canceled</span></td>
                                        <td class="hidden-xs text-center">03/06/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685142</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Gerald Berry</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">2</a></td>
                                        <td class="hidden-xs">Bank Wire</td>
                                        <td class="text-right hidden-xs"><strong>$976,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">02/11/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685141</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Nancy Rose</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">1</a></td>
                                        <td class="hidden-xs">Credit Card</td>
                                        <td class="text-right hidden-xs"><strong>$448,00</strong></td>
                                        <td><span class="label label-success">Delivered</span></td>
                                        <td class="hidden-xs text-center">25/02/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center"><a href="page_ecom_order_view.html"><strong>ORD.685140</strong></a></td>
                                        <td class="visible-lg"><a href="javascript:void(0)">Ethan Greene</a></td>
                                        <td class="text-center visible-lg"><a href="javascript:void(0)">5</a></td>
                                        <td class="hidden-xs">Paypal</td>
                                        <td class="text-right hidden-xs"><strong>$1929,00</strong></td>
                                        <td><span class="label label-warning">Processing</span></td>
                                        <td class="hidden-xs text-center">15/04/2014</td>
                                        <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="page_ecom_order_view.html" data-toggle="tooltip" title="View" class="btn btn-default"><i class="fa fa-eye"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="Delete" class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
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