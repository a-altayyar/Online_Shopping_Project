<?php
$title = "sum";
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
        $active = "products";
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
                <!-- eCommerce Products Header -->
                <?php
                $act = "Product";
                include('./includes/page_ecom_dashboard_header.php');
                ?>
                <!-- END eCommerce Products Header -->

                <!-- Quick Stats -->
                <?php
                //Connect to MySQL
                include './DB-CONFIG.php';
                $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
                if (!$con) {
                    echo mysqli_connect_errno();
                    exit;
                }


                $query_Product = "SELECT * FROM product";


                /*this query and if condition 
                for <!-- Quick Stats --> to filter the result */
                $result_all_Product = mysqli_query($con, $query_Product);

                $query_Product_out = "SELECT * FROM `product` WHERE `Prod_Stock_Status` = 0;";
                $result_Product_out = mysqli_query($con, $query_Product_out);

                $query_Product_available = "SELECT * FROM `product` WHERE `Prod_Stock_Status` > 0;";
                $result_Product_available = mysqli_query($con, $query_Product_available);

                if (isset($_POST['out_of_stock'])) {
                    $query_Product = "SELECT * FROM `product` WHERE `Prod_Stock_Status` = 0;";
                } elseif (isset($_POST['product_available'])) {
                    $query_Product = "SELECT * FROM `product` WHERE `Prod_Stock_Status` > 0;";
                }
                $result_Product = mysqli_query($con, $query_Product);





                ?>

                <!-- Quick Stats -->
                <div class="row text-center">
                    <form action="" method="post">
                        <div class="col-sm-6 col-lg-3">
                            <a href="page_ecom_product_add.php" class="widget widget-hover-effect2">
                                <div class="widget-extra themed-background-success">
                                    <h4 class="widget-content-light"><strong>Add New</strong> Product</h4>
                                </div>
                                <div class="widget-extra-full"><span class="h2 text-success animation-expandOpen"><i
                                            class="fa fa-plus"></i></span></div>
                            </a>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-hover-effect2">
                                <div class="widget-extra themed-background-danger">
                                    <h4 class="widget-content-light"><strong>Out of</strong> Stock</h4>
                                </div>
                                <div class="widget-extra-full">
                                    <button type="submit" name="out_of_stock" class="btn btn-block ">
                                        <span class="h2 text-danger animation-expandOpen">
                                            <?= mysqli_num_rows($result_Product_out) ?>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-hover-effect2">
                                <div class="widget-extra  themed-background-success">
                                    <h4 class="widget-content-light"><strong>Available</strong> Product</h4>
                                </div>
                                <div class="widget-extra-full">
                                    <button type="submit" name="product_available" class="btn btn-block ">
                                        <span class="h2 text-success animation-expandOpen">
                                            <?= mysqli_num_rows($result_Product_available) ?>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 col-lg-3">
                            <div class="widget widget-hover-effect2">
                                <div class="widget-extra themed-background-dark">
                                    <h4 class="widget-content-light"><strong>All</strong> Products</h4>
                                </div>
                                <div class="widget-extra-full">
                                    <button type="submit" name="all_product" class="btn btn-block ">
                                        <span class="h2 themed-color-dark animation-expandOpen">
                                            <?= mysqli_num_rows($result_all_Product) ?>
                                        </span>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>
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
                                <th class="hidden-xs">Product Name</th>
                                <th class="hidden-xs">Status</th>
                                <th class="text-right hidden-xs">Price</th>
                                <th class="hidden-xs">Warranty</th>
                                <th class="hidden-xs">Published?</th>
                                <th class="hidden-xs">More Details</th>
                                <th class="hidden-xs">Added</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // this while loop to print all categories 
                            while ($row = mysqli_fetch_assoc($result_Product)) {
                                ?>
                                <tr>
                                    <td class="text-center"><a href="#"><strong>PID.
                                                <?= $row['Prod_ID'] ?>
                                            </strong></a></td>
                                    <td><a href="#">
                                            <?= $row['Prod_Name'] ?>
                                        </a>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <span
                                            class="label label-<?= ($row['Prod_Stock_Status'] > 0) ? "success" : "danger" ?>">
                                            <?= ($row['Prod_Stock_Status'] > 0) ? "Available (" . $row['Prod_Stock_Status'] . ")" : "Out of Stock" ?>
                                        </span>
                                    </td>
                                    <td class="text-center hidden-xs"><strong>$
                                            <?= $row['Prod_Price'] ?>
                                        </strong>
                                    </td>
                                    <td class="text-center hidden-xs"><strong>
                                            <?= $row['Prod_Warranty'] ?> Month
                                        </strong>
                                    </td>
                                    <td class="text-center hidden-xs">
                                        <span
                                            class="label label-<?= ($row['Prod_Published'] > 0) ? "primary" : "warning" ?>">
                                            <?= ($row['Prod_Published'] > 0) ? "Published" : "Hidden" ?>
                                        </span>
                                    </td>
                                    <td class="text-center hidden-xs"><strong>
                                            <a href="#">More..</a>
                                        </strong>
                                    </td>
                                    <td class="hidden-xs text-center">
                                        <?= $row['Prod_Date_Added'] ?>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group btn-group-xs">
                                            <a href="#" data-toggle="tooltip" title="Edit"
                                                class="btn btn-default"><i class="fa fa-pencil"></i></a>
                                            <a href="#" data-toggle="tooltip" title="Delete"
                                                class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            <?php }


                            mysqli_free_result($result_all_Product);
                            mysqli_free_result($result_Product_available);
                            mysqli_free_result($result_Product_out);
                            mysqli_free_result($result_Product);

                            // Close the connection
                            mysqli_close($con);
                            ?>

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
    <script>$(function () { EcomProducts.init(); });</script>
</body>

</html>