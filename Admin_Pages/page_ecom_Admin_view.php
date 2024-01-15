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
    <?php
    //Connect to MySQL
    include './DB-CONFIG.php';
    $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
    if (!$con) {
        echo mysqli_connect_errno();
        exit;
    }

    $query_Admin = "SELECT * FROM `admin_list`";
    $result_Admin = mysqli_query($con, $query_Admin);


    ?>

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

                    <!-- Datatables Header -->
                    <!-- <div class="content-header">
                        <div class="header-section">
                            <h1>
                                <i class="fa fa-table"></i>Datatables<br><small>HTML tables can become fully dynamic
                                    with cool features!</small>
                            </h1>
                        </div>
                    </div>
                    <ul class="breadcrumb breadcrumb-top">
                        <li>Tables</li>
                        <li><a href="">Datatables</a></li>
                    </ul> -->
                    <!-- END Datatables Header -->

                    <!-- Datatables Content -->
                    <div class="block full">
                        <div class="block-title">
                            <h2><strong>Admin </strong>List</h2>
                        </div>
                        <div class="table-responsive">
                            <table id="example-datatable" class="table table-bordered table-striped table-vcenter">
                                <thead>
                                    <tr>
                                        <th class="text-center">#</th>
                                        <th class="text-center">A.ID</th>
                                        <th class="text-center"><i class="gi gi-user"></i></th>
                                        <th>Employee Name</th>
                                        <th>Email Address</th>
                                        <th>Phone Number</th>
                                        <th>Admin Type</th>
                                        <th>More Details</th>
                                        <th class="text-center">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    // this while loop to print all Admin
                                    $i = 0;
                                    while ($row = mysqli_fetch_assoc($result_Admin)) {
                                        $i++;
                                        ?>

                                        <tr>
                                            <td class="text-center">
                                                <?= $i ?>
                                            </td>

                                            <td><a href="page_ecom_Admin_single_view.php?id=<?= $row['Admin_ID'] ?>">
                                                    AID.
                                                    <?= $row['Admin_ID'] ?>
                                                </a></td>

                                            <td class="text-center"><img style="width: 55px; height: 55px"
                                                    src="img/Personal_Photos/<?= (!empty($row['Admin_Photo'])) ? $row['Admin_Photo'] : 'nothing_img.png' ?>"
                                                    alt="avatar" class="img-circle"></td>

                                            <td><a href="page_ecom_Admin_single_view.php?id=<?= $row['Admin_ID'] ?>">
                                                    <?= $row['Admin_FName'] . " " . $row['Admin_LName'] ?>
                                                </a></td>

                                            <td>
                                                <?= $row['Admin_Email'] ?>
                                            </td>

                                            <td>
                                                <?= $row['Admin_Phone'] ?>
                                            </td>

                                            <td><span
                                                    class="label label-<?= ($row['Admin_Type'] == "SY") ? 'info' : 'warning' ?>">
                                                    <?= ($row['Admin_Type'] == "SY") ? 'System Administrator' : 'DB Administrator' ?>
                                                </span></td>

                                            <td><a
                                                    href="page_ecom_Admin_single_view.php?id=<?= $row['Admin_ID'] ?>">More..</a>
                                            </td>

                                            <td class="text-center">
                                                <div class="btn-group">
                                                    <a href="#" data-toggle="tooltip" title="Edit"
                                                        class="btn btn-xs btn-default"><i class="fa fa-pencil"></i></a>
                                                    <a href="page_ecom_Admin_Delete.php?id=<?= $row['Admin_ID'] ?>"
                                                        data-toggle="tooltip" title="Delete"
                                                        class="btn btn-xs btn-danger"><i class="fa fa-times"></i></a>
                                                </div>
                                            </td>

                                        </tr>
                                        <?php
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
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