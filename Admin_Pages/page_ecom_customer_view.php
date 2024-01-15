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
            $active = "customer_view";
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
                    <!-- eCommerce Customer Header -->
                    <?php
                    $act = "Customer";
                    include('./includes/page_ecom_dashboard_header.php');
                    ?>
                    <!-- END eCommerce Customer Header -->

                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                            <h2><strong>Datatables</strong> integration</h2>
                        </div>

                        <?php
                        //Connect to MySQL
                        include './DB-CONFIG.php';
                        $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
                        if (!$con) {
                            echo mysqli_connect_errno();
                            exit;
                        }
                        $query_Customer = "SELECT * FROM `customer`";
                        $result_customer = mysqli_query($con, $query_Customer);
                        ?>

                        <div class="table-responsive">
                            <table id="example-datatable" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">ID</th>
                                        <th class="text-center"><i class="gi gi-user"></i></th>
                                        <th>Customer Name</th>
                                        <th>Email</th>
                                        <th>Subscription</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 0;
                                    while ($row = mysqli_fetch_assoc($result_customer)) {
                                        $i++; ?>
                                        <tr>
                                            <td class="text-center">
                                                <?= $i ?>
                                            </td>
                                            <td class="text-center"><strong style="color:#1bbae1;">CID.
                                                    <?= $row['Cust_ID'] ?>
                                                </strong></td>
                                            <td class="text-center"><img style="width: 55px; height: 55px"
                                                    src="..\Store\assets\images\clients\<?= (!empty($row['Cust_Img'])) ? $row['Cust_Img'] : 'unknown.png' ?>"
                                                    alt="avatar" class="img-circle"></td>
                                            <td><a href="page_ecom_customer_single_view.php?id=<?= $row['Cust_ID'] ?>">
                                                    <?= $row['Cust_FName'] . " " . $row['Cust_LName'] ?>
                                                </a></td>
                                            <td>
                                                <?= $row['Cust_Email'] ?>
                                            </td>
                                            <td><span class="label label-info">Active</span></td>
                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="page_ecom_customer_single_view.php?id=<?= $row['Cust_ID'] ?>"
                                                        data-toggle="tooltip" title="Edit" class="btn btn-xs btn-default"><i
                                                            class="fa fa-eye"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>

                        <?php
                        mysqli_free_result($result_customer);

                        // Close the connection
                        mysqli_close($con);
                        ?>
                    </div>
                    <!-- END Datatables Content -->




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