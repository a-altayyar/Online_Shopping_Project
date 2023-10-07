<?php 
$title ="sum";
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
                $active= "dashboard"; 
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
                    <header class="navbar navbar-default">
                        <!-- Left Header Navigation -->
                        <ul class="nav navbar-nav-custom">
                            <!-- Main Sidebar Toggle Button -->
                            <li>
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar');this.blur();">
                                    <i class="fa fa-bars fa-fw"></i>
                                </a>
                            </li>
                            <!-- END Main Sidebar Toggle Button -->

                            <!-- Template Options -->
                            <!-- Change Options functionality can be found in js/app.js - templateOptions() -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="gi gi-settings"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-options">
                                    <li class="dropdown-header text-center">Header Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-default">Light</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-header-inverse">Dark</a>
                                        </div>
                                    </li>
                                    <li class="dropdown-header text-center">Page Style</li>
                                    <li>
                                        <div class="btn-group btn-group-justified btn-group-sm">
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style">Default</a>
                                            <a href="javascript:void(0)" class="btn btn-primary" id="options-main-style-alt">Alternative</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END Template Options -->
                        </ul>
                        <!-- END Left Header Navigation -->

                        <!-- Search Form -->
                        <form action="page_ready_search_results.html" method="post" class="navbar-form-custom">
                            <div class="form-group">
                                <input type="text" id="top-search" name="top-search" class="form-control" placeholder="Search..">
                            </div>
                        </form>
                        <!-- END Search Form -->

                        <!-- Right Header Navigation -->
                        <ul class="nav navbar-nav-custom pull-right">
                            <!-- Alternative Sidebar Toggle Button -->
                            <li>
                                <!-- If you do not want the main sidebar to open when the alternative sidebar is closed, just remove the second parameter: App.sidebar('toggle-sidebar-alt'); -->
                                <a href="javascript:void(0)" onclick="App.sidebar('toggle-sidebar-alt', 'toggle-other');this.blur();">
                                    <i class="gi gi-share_alt"></i>
                                    <span class="label label-primary label-indicator animation-floating">4</span>
                                </a>
                            </li>
                            <!-- END Alternative Sidebar Toggle Button -->

                            <!-- User Dropdown -->
                            <li class="dropdown">
                                <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="img/placeholders/avatars/avatar2.jpg" alt="avatar"> <i class="fa fa-angle-down"></i>
                                </a>
                                <ul class="dropdown-menu dropdown-custom dropdown-menu-right">
                                    <li class="dropdown-header text-center">Account</li>
                                    <li>
                                        <a href="page_ready_timeline.html">
                                            <i class="fa fa-clock-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">10</span>
                                            Updates
                                        </a>
                                        <a href="page_ready_inbox.html">
                                            <i class="fa fa-envelope-o fa-fw pull-right"></i>
                                            <span class="badge pull-right">5</span>
                                            Messages
                                        </a>
                                        <a href="page_ready_pricing_tables.html"><i class="fa fa-magnet fa-fw pull-right"></i>
                                            <span class="badge pull-right">3</span>
                                            Subscriptions
                                        </a>
                                        <a href="page_ready_faq.html"><i class="fa fa-question fa-fw pull-right"></i>
                                            <span class="badge pull-right">11</span>
                                            FAQ
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_user_profile.html">
                                            <i class="fa fa-user fa-fw pull-right"></i>
                                            Profile
                                        </a>
                                        <!-- Opens the user settings modal that can be found at the bottom of each page (page_footer.html in PHP version) -->
                                        <a href="#modal-user-settings" data-toggle="modal">
                                            <i class="fa fa-cog fa-fw pull-right"></i>
                                            Settings
                                        </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="page_ready_lock_screen.html"><i class="fa fa-lock fa-fw pull-right"></i> Lock Account</a>
                                        <a href="login.html"><i class="fa fa-ban fa-fw pull-right"></i> Logout</a>
                                    </li>
                                    <li class="dropdown-header text-center">Activity</li>
                                    <li>
                                        <div class="alert alert-success alert-alt">
                                            <small>5 min ago</small><br>
                                            <i class="fa fa-thumbs-up fa-fw"></i> You had a new sale ($10)
                                        </div>
                                        <div class="alert alert-info alert-alt">
                                            <small>10 min ago</small><br>
                                            <i class="fa fa-arrow-up fa-fw"></i> Upgraded to Pro plan
                                        </div>
                                        <div class="alert alert-warning alert-alt">
                                            <small>3 hours ago</small><br>
                                            <i class="fa fa-exclamation fa-fw"></i> Running low on space<br><strong>18GB in use</strong> 2GB left
                                        </div>
                                        <div class="alert alert-danger alert-alt">
                                            <small>Yesterday</small><br>
                                            <i class="fa fa-bug fa-fw"></i> <a href="javascript:void(0)" class="alert-link">New bug submitted</a>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <!-- END User Dropdown -->
                        </ul>
                        <!-- END Right Header Navigation -->
                    </header>
                    <!-- END Header -->

                    <!-- Page content -->
                    <div id="page-content">
                        <!-- eCommerce Dashboard Header -->
                        <div class="content-header">
                            <ul class="nav-horizontal text-center">
                                <li class="active">
                                    <a href="page_ecom_dashboard.html"><i class="fa fa-bar-chart"></i> Dashboard</a>
                                </li>
                                <li>
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
                        <!-- END eCommerce Dashboard Header -->

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
                                        <h4 class="widget-content-light"><strong>Conversion</strong> Rate</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">4.7%</span></div>
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
                                        <h4 class="widget-content-light"><strong>Earnings</strong> Today</h4>
                                    </div>
                                    <div class="widget-extra-full"><span class="h2 themed-color-dark animation-expandOpen">$ 4.250</span></div>
                                </a>
                            </div>
                        </div>
                        <!-- END Quick Stats -->

                        <!-- eShop Overview Block -->
                        <div class="block full">
                            <!-- eShop Overview Title -->
                            <div class="block-title">
                                <div class="block-options pull-right">
                                    <div class="btn-group btn-group-sm">
                                        <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default dropdown-toggle" data-toggle="dropdown">Last Year <span class="caret"></span></a>
                                        <ul class="dropdown-menu dropdown-menu-right">
                                            <li class="active">
                                                <a href="javascript:void(0)">Last Year</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Last Month</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">This Month</a>
                                            </li>
                                            <li>
                                                <a href="javascript:void(0)">Today</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                </div>
                                <h2><strong>eShop</strong> Overview</h2>
                            </div>
                            <!-- END eShop Overview Title -->

                            <!-- eShop Overview Content -->
                            <div class="row">
                                <div class="col-md-6 col-lg-4">
                                    <div class="row push">
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">45.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Total Orders</a></small></h3>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">$ 1.200,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Cart Value</a></small></h3>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">1.520.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Visits</a></small></h3>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">28.000</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Customers</a></small></h3>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">3.5%</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Conv. Rate</a></small></h3>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">4.250</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Products</a></small></h3>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">$ 260.000,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Net Profit</a></small></h3>
                                        </div>
                                        <div class="col-xs-6">
                                            <h3><strong class="animation-fadeInQuick">$ 16.850,00</strong><br><small class="text-uppercase animation-fadeInQuickInv"><a href="javascript:void(0)">Payment Fees</a></small></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-8">
                                    <!-- Flot Charts (initialized in js/pages/ecomDashboard.js), for more examples you can check out http://www.flotcharts.org/ -->
                                    <div id="chart-overview" style="height: 350px;"></div>
                                </div>
                            </div>
                            <!-- END eShop Overview Content -->
                        </div>
                        <!-- END eShop Overview Block -->

                        <!-- Orders and Products -->
                        <div class="row">
                            <div class="col-lg-6">
                                <!-- Latest Orders Block -->
                                <div class="block">
                                    <!-- Latest Orders Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_orders.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Latest</strong> Orders</h2>
                                    </div>
                                    <!-- END Latest Orders Title -->

                                    <!-- Latest Orders Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="javascript:void(0)"><strong>ORD.685116</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Gerald Berry</a></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="text-right"><strong>$65,00</strong></td>
                                                <td class="text-right"><span class="label label-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685115</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Patrick Bates</a></td>
                                                <td class="hidden-xs">Bank wire</td>
                                                <td class="text-right"><strong>$268,00</strong></td>
                                                <td class="text-right"><span class="label label-danger">Canceled</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685114</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Ethan Greene</a></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="text-right"><strong>$362,00</strong></td>
                                                <td class="text-right"><span class="label label-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685113</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Bruce Hicks</a></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="text-right"><strong>$23,00</strong></td>
                                                <td class="text-right"><span class="label label-warning">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685112</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Harry Burke</a></td>
                                                <td class="hidden-xs">Bank wire</td>
                                                <td class="text-right"><strong>$1360,00</strong></td>
                                                <td class="text-right"><span class="label label-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685111</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Nancy Rose</a></td>
                                                <td class="hidden-xs">Bank wire</td>
                                                <td class="text-right"><strong>$2685,00</strong></td>
                                                <td class="text-right"><span class="label label-warning">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685110</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Helen Jensen</a></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="text-right"><strong>$128,00</strong></td>
                                                <td class="text-right"><span class="label label-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685109</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Harry Medina</a></td>
                                                <td class="hidden-xs">Check</td>
                                                <td class="text-right"><strong>$3150,00</strong></td>
                                                <td class="text-right"><span class="label label-warning">Processing</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685108</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Ryan Hopkins</a></td>
                                                <td class="hidden-xs">Check</td>
                                                <td class="text-right"><strong>$750,00</strong></td>
                                                <td class="text-right"><span class="label label-success">Delivered</span></td>
                                            </tr>
                                            <tr>
                                                <td class="text-center"><a href="javascript:void(0)"><strong>ORD.685107</strong></a></td>
                                                <td class="hidden-xs"><a href="javascript:void(0)">Anthony Franklin</a></td>
                                                <td class="hidden-xs">Paypal</td>
                                                <td class="text-right"><strong>$630,00</strong></td>
                                                <td class="text-right"><span class="label label-danger">Canceled</span></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Latest Orders Content -->
                                </div>
                                <!-- END Latest Orders Block -->
                            </div>
                            <div class="col-lg-6">
                                <!-- Top Products Block -->
                                <div class="block">
                                    <!-- Top Products Title -->
                                    <div class="block-title">
                                        <div class="block-options pull-right">
                                            <a href="page_ecom_products.html" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Show All"><i class="fa fa-eye"></i></a>
                                            <a href="javascript:void(0)" class="btn btn-alt btn-sm btn-default" data-toggle="tooltip" title="Settings"><i class="fa fa-cog"></i></a>
                                        </div>
                                        <h2><strong>Top</strong> Products</h2>
                                    </div>
                                    <!-- END Top Products Title -->

                                    <!-- Top Products Content -->
                                    <table class="table table-borderless table-striped table-vcenter table-bordered">
                                        <tbody>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8765</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">iPhone 6 Plus 32GB</a></td>
                                                <td class="text-center"><strong>435</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8764</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Wii U</a></td>
                                                <td class="text-center"><strong>502</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8763</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Samsung Galaxy Note 4 32GB</a></td>
                                                <td class="text-center"><strong>440</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8762</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Playstation 4</a></td>
                                                <td class="text-center"><strong>750</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8761</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">HTC One 32GB</a></td>
                                                <td class="text-center"><strong>420</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8760</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Xbox One</a></td>
                                                <td class="text-center"><strong>650</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8762</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">iPad Mini Retina 64GB</a></td>
                                                <td class="text-center"><strong>521</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8761</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">LG Tab 10.1</a></td>
                                                <td class="text-center"><strong>427</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8760</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">Macbook Pro 15' Retina</a></td>
                                                <td class="text-center"><strong>392</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center" style="width: 100px;"><a href="page_ecom_product_edit.html"><strong>PID.8760</strong></a></td>
                                                <td><a href="page_ecom_product_edit.html">PS Vita</a></td>
                                                <td class="text-center"><strong>380</strong> orders</td>
                                                <td class="hidden-xs text-center">
                                                    <div class="text-warning">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <!-- END Top Products Content -->
                                </div>
                                <!-- END Top Products Block -->
                            </div>
                        </div>
                        <!-- END Orders and Products -->
                    </div>
                    <!-- END Page Content -->

                    <!-- Footer -->
                    <footer class="clearfix">
                        <div class="pull-right">
                            Crafted with <i class="fa fa-heart text-danger"></i> by <a href="https://1.envato.market/ydb" target="_blank">pixelcave</a>
                        </div>
                        <div class="pull-left">
                            <span id="year-copy"></span> &copy; <a href="https://1.envato.market/x4R" target="_blank">ProUI 3.8</a>
                        </div>
                    </footer>
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
        <script src="js/pages/ecomDashboard.js"></script>
        <script>$(function(){ EcomDashboard.init(); });</script>
    </body>
</html>