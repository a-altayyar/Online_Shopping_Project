<?php
session_start();

// Make sure you are logged in 
include('./includes/logged_in.php');
?>

<?php
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
$join_query = "SELECT `Prod_ID`, `Prod_Name`, `FK_Cate_ID`, categories.Cate_Name, `Prod_Published`, `Prod_Long_Desc`, `Prod_Short_Desc`, `Prod_Below_Desc`, `Prod_Price`, `Prod_Stock_Status`, `Prod_Warranty`, admin_list.Admin_FName, admin_list.Admin_LName,  `Prod_Img`, `Prod_Date_Added` 
                    FROM `product` 
                    join  `categories` ON product.FK_Cate_ID = categories.Cate_ID 
                    join  `admin_list` ON product.FK_Admin_ID = admin_list.Admin_ID";
$select = $join_query . " WHERE `product`.`Prod_ID` = " . $id . " LIMIT 1";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($result);

?>


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
        $active = "NULL";
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

                <!-- Quick Stats -->
                <div class="row text-left">

                    <!-- btn-default -->
                    <!-- btn-primary -->
                    <!-- btn-success -->
                    <a href="page_ecom_products.php" class="btn btn-alt btn-lg btn-default"><i
                            class="gi gi-chevron-left"></i><strong> Product</strong> List</a>

                    <a href="page_ecom_product_edit.php?id=<?= $row['Prod_ID'] ?>"
                        class="btn btn-alt btn-lg btn-warning"><i class="fa fa-pencil"></i><strong> Edit</strong>
                        Product</a>
                    <button type="button" data-toggle="tooltip" class="btn btn-alt btn-lg btn-danger"
                        onclick="DeleteOrNot(<?= $row['Prod_ID'] ?>)"><i class="hi hi-remove"></i><strong>
                            Delete</strong>
                        Product</button>

                    <br><br>

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
                                <th class="hidden-xs">Category Name</th>
                                <th class="hidden-xs">Status</th>
                                <th class="hidden-xs">Price</th>
                                <th class="hidden-xs">Warranty</th>
                                <th class="hidden-xs">Published?</th>
                                <th class="hidden-xs">Add By</th>
                                <th class="hidden-xs">Added</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="text-center"><strong style="color:#1bbae1;">PID.
                                        <?= $row['Prod_ID'] ?>
                                    </strong></td>
                                <td><strong style="color:#1bbae1;">
                                        <?= $row['Prod_Name'] ?>
                                    </strong>
                                </td>
                                <td><a href="page_ecom_Categories_edit.php?id=<?= $row['FK_Cate_ID'] ?>">
                                        <?= $row['Cate_Name'] ?>
                                    </a>
                                </td>
                                <td class="text-center hidden-xs">
                                    <span
                                        class="label label-<?= ($row['Prod_Stock_Status'] > 0) ? "success" : "danger" ?>">
                                        <?= ($row['Prod_Stock_Status'] > 0) ? "Available (" . $row['Prod_Stock_Status'] . ")" : "Out of Stock" ?>
                                    </span>
                                </td>
                                <td class="text-center hidden-xs"><strong>
                                        <?= $row['Prod_Price'] ?> SAR
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
                                        <?= $row['Admin_FName'] . " " . $row['Admin_LName'] ?>
                                    </strong>
                                </td>
                                <td class="hidden-xs text-center">
                                    <?= $row['Prod_Date_Added'] ?>
                                </td>
                            </tr>
                        </tbody>
                    </table><br><br>
                    <!-- END All Products Content -->

                    <div class="row">
                        <div class="col-md-6">
                            <!-- <div class="widget"> -->
                            <div class="widget-advanced widget-advanced-alt">
                                <div class="widget-header text-left">
                                    <img src="img/placeholders/headers/widget5_header.jpg" alt="background"
                                        class="widget-background animation-pulseSlow">
                                    <h3 class="widget-content widget-content-image widget-content-light clearfix">
                                        <a href="#" class="themed-color-default">All
                                            <strong>Description</strong></a><br>
                                        <small>3 Desc</small>
                                    </h3>
                                </div>
                                <div class="widget-main">
                                    <ul>

                                        <label>
                                            <li>
                                                <h4 class="text-left text-info"><strong>Short Description:</strong></h4>
                                            </li>
                                        </label>
                                        <p>
                                            <?= $row['Prod_Short_Desc'] ?>
                                        </p>

                                        <hr>

                                        <li><label>
                                                <h4 class="text-left text-info"><strong>Long Description:</strong></h4>
                                            </label></li>
                                        <p>
                                            <?= $row['Prod_Long_Desc'] ?>
                                        </p>

                                        <hr>

                                        <label>
                                            <li>
                                                <h4 class="text-left text-info"><strong>Below Description:</strong></h4>
                                            </li>
                                        </label>
                                        <p>
                                            <?= ($row['Prod_Below_Desc']) ? $row['Prod_Below_Desc'] : 'NULL' ?>
                                        </p>

                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="block">
                                    <div class="block-title">
                                        <h2><strong>Product</strong> Images</h2>
                                    </div>

                                    <div class="gallery" data-toggle="lightbox-gallery">
                                        <div class="row">

                                            <?php
                                            $explode_img = explode(',', $row['Prod_Img']);
                                            foreach ($explode_img as $img):
                                                ?>

                                                <div class="col-sm-4">
                                                    <?php if (!empty($img)): ?>
                                                        <a href="img/product/<?= $img ?>" class="gallery-link"
                                                            title="Image Info">
                                                            <img src="img/product/<?= $img ?>" alt="image">
                                                        </a>
                                                    <?php else: ?>
                                                        <img src="img/product/nothing_img.png" alt="image" />
                                                    <?php endif; ?>
                                                </div>

                                                <?php
                                            endforeach;
                                            ?>

                                            <?php
                                            // Used echo...
                                            // $explode_img = explode(',', $row['Prod_Img']);
                                            // foreach ($explode_img as $img):
                                            
                                            //     echo "<div class='col-sm-4'>";
                                            //     if (!empty($img)):
                                            //         echo "<a href='img/product/" . $img . "' class='gallery-link'
                                            //                 title='Image Info'>
                                            //                 <img src='img/product/" . $img . "' alt='image'>
                                            //             </a>";
                                            //     else:
                                            //         echo "<img src='img/product/nothing_img.png' alt='image' />";
                                            //     endif;
                                            //     echo "</div>";
                                            
                                            // endforeach;
                                            ?>

                                        </div>
                                    </div>

                                </div>
                            </div>



                        </div>
                    </div>


                </div>




            </div>

        </div>


    </div>



    </div>


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
    <?php
    mysqli_free_result($result);

    // Close the connection
    mysqli_close($con);
    ?>

    <!-- Sends a notification that enables you to complete the deletion or cancellation process  -->
    <script>
        function DeleteOrNot(ID) {
            if (confirm('Action DELETE.\nClick OK to continue.'))
                window.location = 'page_ecom_product_delete.php?id=' + ID;
        }
    </script>

    <!-- Load and execute javascript code used only in this page -->
    <script src="js/pages/ecomProducts.js"></script>
    <script>$(function () { EcomProducts.init(); });</script>
</body>

</html>