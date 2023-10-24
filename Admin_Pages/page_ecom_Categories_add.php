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

    $error_fields = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Validation
        if (!(isset($_POST['add_name']) && !empty($_POST['add_name']))) {
            $error_fields[] = "name";
        }

        if (!$error_fields) {
            //Connect to DB
            include './DB-CONFIG.php';
            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
            if (!$con) {
                echo mysqli_connect_errno();
                exit;
            }

            //Escape any sepcial characters to avoid SQL Injection
            $name = mysqli_escape_string($con, $_POST['add_name']);
            $Admin_ID = $_SESSION['A_ID'];

            //Insert the data
            $query = "INSERT INTO `categories` (`Cate_Name`, `FK_Admin_ID`) VALUES ('$name', '$Admin_ID');";
            if (mysqli_query($con, $query)) {
                header("Location: page_ecom_Categories_add.php");
                exit;
            } else {
                //echo $query;
                echo mysqli_error($con);
            }





            //Close the connection
            mysqli_close($con);
        }
    }
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
                                    <h2><i class="fa fa-plus-square"></i> <strong><b style="color: #32cd32 ">Add New</b>
                                            Categories</strong> Data</h2>
                                </div>
                                <!-- END Categories Data Title -->

                                <!-- Categories Data Content -->
                                <form method="post" class="form-horizontal form-bordered">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Categories
                                            Name:</label><br>
                                        <div class="col-md-9">
                                            <input type="text" name="add_name" value="" class="form-control"
                                                placeholder="Name">
                                            <?php if (in_array("name", $error_fields))
                                                echo "* Please enter your name"; ?>
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
                                            <th>#</th>
                                            <th class="text-center" style="width: 70px;">ID</th>
                                            <th>Categories Name</th>
                                            <th class="hidden-xs text-center">Add By</th>
                                            <th class="hidden-xs text-center">Added</th>
                                            <th class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        //Connect to MySQL
                                        include './DB-CONFIG.php';
                                        $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
                                        if (!$con) {
                                            echo mysqli_connect_errno();
                                            exit;
                                        }
                                        $query_categories = "SELECT `Cate_ID`, `Cate_Name`, `FK_Admin_ID`, `Cate_Date`, admin_list.Admin_FName, admin_list.Admin_LName 
                                                                FROM `categories`, `admin_list` WHERE categories.FK_Admin_ID = admin_list.Admin_ID;";
                                        $result_categories = mysqli_query($con, $query_categories);

                                        // this while loop to print all categories
                                        $i = 0;
                                        while ($row = mysqli_fetch_assoc($result_categories)) {
                                            $i++;
                                            ?>
                                            <tr>
                                                <td class="text-center">
                                                    <?= $i ?>
                                                </td>
                                                <td class="text-center"><strong style="color:#1bbae1;">CID.
                                                        <?= $row['Cate_ID'] ?>
                                                    </strong>
                                                </td>
                                                <td style="color:#1bbae1;">
                                                    <?= $row['Cate_Name'] ?>
                                                </td>
                                                <td class="hidden-xs text-center">
                                                    <?= $row['Admin_FName'] . " " . $row['Admin_LName'] ?>
                                                </td>
                                                <td class="hidden-xs text-center">
                                                    <?= $row['Cate_Date'] ?>
                                                </td>
                                                <td class="text-center">
                                                    <div class="btn-group btn-group-xs">
                                                        <a href="page_ecom_Categories_edit.php?id=<?= $row['Cate_ID'] ?>"
                                                            data-toggle="tooltip" title="Edit" class="btn btn-default"><i
                                                                class="fa fa-pencil"></i></a>
                                                        <button onclick="DeleteOrNot(<?= $row['Cate_ID'] ?>)"
                                                            data-toggle="tooltip" title="Delete"
                                                            class="btn btn-xs btn-danger"><i
                                                                class="fa fa-times"></i></button>

                                                    </div>
                                                </td>
                                            </tr>
                                        <?php }
                                        mysqli_free_result($result_categories);

                                        // Close the connection
                                        mysqli_close($con);
                                        ?>
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

    <!-- Sends a notification that enables you to complete the deletion or cancellation process  -->
    <script>
        function DeleteOrNot(ID) {
            if (confirm('Action DELETE.\nClick OK to continue.'))
                window.location = 'page_ecom_Categories_delete?id=' + ID;
        }
    </script>

    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="js/helpers/ckeditor/ckeditor.js"></script>
</body>

</html>