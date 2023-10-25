<?php
session_start();

// Make sure you are logged in 
include('./includes/logged_in.php');

//Connect to DB
include './DB-CONFIG.php';
$con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
if (!$con) {
    echo mysqli_connect_errno();
    exit;
}

//select the user
//edit.php?id=1 => $_GET['id']
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$query_Admin = "SELECT * FROM `admin_list` WHERE `admin_list`.`Admin_ID` = " . $id . " LIMIT 1";
$result_Admin = mysqli_query($con, $query_Admin);
$row = mysqli_fetch_assoc($result_Admin);


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
            $active = "Emp_list";
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

                    <div class="row text-left">
                        <a href="page_ecom_Admin_view.php" class="btn btn-alt btn-lg btn-default"><i
                                class="gi gi-chevron-left"></i><strong> Categories</strong> List</a><br><br>

                    </div>

                    <!-- Customer Content -->
                    <div class="row">
                        <div class="col-lg-4">
                            <!-- Customer Info Block -->
                            <div class="block">
                                <!-- Customer Info Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-file-o"></i> <strong>Admin</strong> Info</h2>
                                </div>
                                <!-- END Customer Info Title -->

                                <!-- Customer Info -->
                                <div class="block-section text-center">
                                    <a href="#">
                                        <img style="width: 128px; height: 128px"
                                            src="img/Personal_Photos/<?= (!empty($row['Admin_Photo'])) ? $row['Admin_Photo'] : 'nothing_img.png' ?>" alt="avatar"
                                            class="img-circle">
                                    </a>
                                    <h3>
                                        <strong>
                                            <?= $row['Admin_FName'] . " " . $row['Admin_LName'] ?>r
                                        </strong><br><small></small>
                                    </h3>
                                </div>
                                <table class="table table-borderless table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <td class="text-right" style="width: 50%;"><strong>Admin ID</strong></td>
                                            <td>
                                                <?= $row['Admin_ID'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>First Name</strong></td>
                                            <td>
                                                <?= $row['Admin_FName'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Last Name</strong></td>
                                            <td>
                                                <?= $row['Admin_LName'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Email Address</strong></td>
                                            <td>
                                                <?= $row['Admin_Email'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Phone Number</strong></td>
                                            <td>
                                                <?= $row['Admin_Phone'] ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Birthdate</strong></td>
                                            <td>November 20, 1984</td>
                                        </tr>
                                        <tr>
                                            <td class="text-right"><strong>Registration</strong></td>
                                            <td>
                                                <?= $row['Created_at'] ?>
                                            </td>
                                        </tr>
                                        <!-- <tr>
                                            <td class="text-right"><strong>Last Visit</strong></td>
                                            <td>06/11/2014 - 09:41</td>
                                        </tr> -->
                                        <tr>
                                            <td class="text-right"><strong>Status</strong></td>
                                            <td><span class="label label-success"><i class="fa fa-check"></i>
                                                    Active</span></td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END Customer Info -->
                            </div>
                            <!-- END Customer Info Block -->

                            <!-- Employee Addresses Block -->
                            <div class="block">

                                <!-- Employee Addresses Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-building-o"></i> <strong>Admin</strong> Address </h2>
                                </div>
                                <!-- END Employee Addresses Title -->

                                <!-- Employee Addresses Content -->
                                <div class="row">
                                    <!-- Billing Address Block -->
                                    <div class="col-lg-6">

                                        <!-- Billing Address Content -->
                                        <h4><strong>Mohammed AL</strong></h4>
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
                                <!-- END Employee Addresses Content -->

                            </div>
                            <!-- END Employee Addresses Block -->


                            <!-- Quick Stats Block -->
                            <!-- <div class="block"> -->
                            <!-- Quick Stats Title -->
                            <!-- <div class="block-title">
                                    <h2><i class="fa fa-line-chart"></i> <strong>Quick</strong> Stats</h2>
                                </div> -->
                            <!-- END Quick Stats Title -->

                            <!-- Quick Stats Content -->
                            <!-- <a href="javascript:void(0)"
                                    class="widget widget-hover-effect2 themed-background-muted-light">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-right themed-background">
                                            <i class="fa fa-truck"></i>
                                        </div>
                                        <h4 class="text-left">
                                            <strong>4</strong><br><small>Orders in Total</small>
                                        </h4>
                                    </div>
                                </a>
                                <a href="javascript:void(0)"
                                    class="widget widget-hover-effect2 themed-background-muted-light">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-right themed-background-success">
                                            <i class="fa fa-usd"></i>
                                        </div>
                                        <h4 class="text-left text-success">
                                            <strong>$ 2.125,00</strong><br><small>Orders Value</small>
                                        </h4>
                                    </div>
                                </a>
                                <a href="javascript:void(0)"
                                    class="widget widget-hover-effect2 themed-background-muted-light">
                                    <div class="widget-simple">
                                        <div class="widget-icon pull-right themed-background-warning">
                                            <i class="fa fa-shopping-cart"></i>
                                        </div>
                                        <h4 class="text-left text-warning">
                                            <strong>3</strong> ($ 517,00)<br><small>Products in Cart</small>
                                        </h4>
                                    </div>
                                </a> -->
                            <!-- END Quick Stats Content -->
                            <!-- </div> -->
                            <!-- END Quick Stats Block -->


                        </div>


                        <div class="col-lg-8">

                            <!-- log Admin Block -->
                            <div class="block">
                                <!-- log Admin Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <span class="label label-default"><strong> 3 H</strong></span>
                                    </div>
                                    <h2><i class="fa fa-truck"></i> <strong>Log Admin</strong></h2>
                                </div>
                                <!-- END log Admin Title -->

                                <!-- log Admin Content -->
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 100px;"><a
                                                    href="page_ecom_order_view.html"><strong>LOG.685199</strong></a>
                                            </td>

                                            <td><span class="label label-danger">Log Out</span></td>

                                            <td class="text-center hidden-xs" style="width: 10%;">
                                                <strong>16/11/2014</strong>
                                            </td>
                                            <td class="text-center hidden-xs" style="width: 10%;">
                                                <strong>09:41</strong>
                                            </td>

                                            <td class="hidden-xs"><small>Desc..</small></td>


                                        </tr>

                                        <tr>
                                            <td class="text-center" style="width: 100px;"><a
                                                    href="page_ecom_order_view.html"><strong>LOG.685199</strong></a>
                                            </td>

                                            <td><span class="label label-success">Log in</span></td>

                                            <td class="text-center hidden-xs" style="width: 10%;">
                                                <strong>16/11/2014</strong>
                                            </td>
                                            <td class="text-center hidden-xs" style="width: 10%;">
                                                <strong>10:41</strong>
                                            </td>

                                            <td class="hidden-xs"><small>Desc..</small></td>


                                        </tr>

                                    </tbody>
                                </table>
                                <!-- END log Admin Content -->
                            </div>
                            <!-- END log Admin Block -->

                            <!-- Orders Block -->
                            <div class="block">
                                <!-- Orders Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <span class="label label-success"><strong>$ 2125,00</strong></span>
                                    </div>
                                    <h2><i class="fa fa-truck"></i> <strong>Complete Orders Work</strong> (4)</h2>
                                </div>
                                <!-- END Orders Title -->

                                <!-- Orders Content -->
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 100px;"><a
                                                    href="page_ecom_order_view.html"><strong>ORD.685199</strong></a>
                                            </td>
                                            <td class="hidden-xs" style="width: 15%;"><a href="javascript:void(0)">5
                                                    Products</a></td>
                                            <td class="text-right hidden-xs" style="width: 10%;">
                                                <strong>$585,00</strong>
                                            </td>
                                            <td><span class="label label-warning">Processing</span></td>
                                            <td class="hidden-xs">Paypal</td>
                                            <td class="hidden-xs text-center">16/11/2014</td>
                                            <td class="text-center" style="width: 70px;">
                                                <div class="btn-group btn-group-xs">
                                                    <a href="page_ecom_order_view.html" data-toggle="tooltip" title=""
                                                        class="btn btn-default" data-original-title="View"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a
                                                    href="page_ecom_order_view.html"><strong>ORD.685198</strong></a>
                                            </td>
                                            <td class="hidden-xs"><a href="javascript:void(0)">2 Products</a></td>
                                            <td class="text-right hidden-xs"><strong>$958,00</strong></td>
                                            <td><span class="label label-info">For delivery</span></td>
                                            <td class="hidden-xs">Credit Card</td>
                                            <td class="hidden-xs text-center">03/10/2014</td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-xs">
                                                    <a href="page_ecom_order_view.html" data-toggle="tooltip" title=""
                                                        class="btn btn-default" data-original-title="View"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a
                                                    href="page_ecom_order_view.html"><strong>ORD.685197</strong></a>
                                            </td>
                                            <td class="hidden-xs"><a href="javascript:void(0)">3 Products</a></td>
                                            <td class="text-right hidden-xs"><strong>$318,00</strong></td>
                                            <td><span class="label label-success">Delivered</span></td>
                                            <td class="hidden-xs">Bank Wire</td>
                                            <td class="hidden-xs text-center">17/06/2014</td>
                                            <td class="text-center">
                                                <div class="btn-group btn-group-xs">
                                                    <a href="page_ecom_order_view.html" data-toggle="tooltip" title=""
                                                        class="btn btn-default" data-original-title="View"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END Orders Content -->
                            </div>
                            <!-- END Orders Block -->

                            <!-- Products in Cart Block -->
                            <div class="block">
                                <!-- Products in Cart Title -->
                                <div class="block-title">
                                    <div class="block-options pull-right">
                                        <span class="label label-success"><strong>$ 517,00</strong></span>
                                    </div>
                                    <h2><i class="fa fa-shopping-cart"></i> <strong>Products Work</strong> Created (3)
                                    </h2>
                                </div>
                                <!-- END Products in Cart Title -->

                                <!-- Products in Cart Content -->
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <td class="text-center" style="width: 100px;"><a
                                                    href="page_ecom_product_edit.html"><strong>PID.8715</strong></a>
                                            </td>
                                            <td class="hidden-xs" style="width: 15%;"><a
                                                    href="page_ecom_product_edit.html">Product #98</a></td>
                                            <td class="text-right hidden-xs" style="width: 10%;">
                                                <strong>$399,00</strong>
                                            </td>
                                            <td><span class="label label-success">Available (479)</span></td>
                                            <td class="text-center" style="width: 70px;">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title=""
                                                    class="btn btn-xs btn-default" data-original-title="Edit"><i
                                                        class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a
                                                    href="page_ecom_product_edit.html"><strong>PID.8725</strong></a>
                                            </td>
                                            <td class="hidden-xs"><a href="page_ecom_product_edit.html">Product #98</a>
                                            </td>
                                            <td class="text-right hidden-xs"><strong>$59,00</strong></td>
                                            <td><span class="label label-success">Available (163)</span></td>
                                            <td class="text-center">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title=""
                                                    class="btn btn-xs btn-default" data-original-title="Edit"><i
                                                        class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="text-center"><a
                                                    href="page_ecom_product_edit.html"><strong>PID.8798</strong></a>
                                            </td>
                                            <td class="hidden-xs"><a href="page_ecom_product_edit.html">Product #98</a>
                                            </td>
                                            <td class="text-right hidden-xs"><strong>$59,00</strong></td>
                                            <td><span class="label label-danger">Out of Stock</span></td>
                                            <td class="text-center">
                                                <a href="page_ecom_product_edit.html" data-toggle="tooltip" title=""
                                                    class="btn btn-xs btn-default" data-original-title="Edit"><i
                                                        class="fa fa-pencil"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END Products in Cart Content -->
                            </div>
                            <!-- END Products in Cart Block -->


                            <!-- Private Notes Block -->
                            <div class="block full">
                                <!-- Private Notes Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-file-text-o"></i> <strong>Private</strong> Notes</h2>
                                </div>
                                <!-- END Private Notes Title -->

                                <!-- Private Notes Content -->
                                <div class="alert alert-info">
                                    <i class="fa fa-fw fa-info-circle"></i> This note will be displayed to all employees
                                    but not to customers.
                                </div>
                                <form action="page_ecom_customer_view.html" method="post" onsubmit="return false;">
                                    <textarea id="private-note" name="private-note" class="form-control" rows="4"
                                        placeholder="Your note.."></textarea>
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-plus"></i> Add
                                        Note</button>
                                </form>
                                <!-- END Private Notes Content -->
                            </div>
                            <!-- END Private Notes Block -->
                        </div>
                    </div>
                    <!-- END Customer Content -->
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

</body>

</html>