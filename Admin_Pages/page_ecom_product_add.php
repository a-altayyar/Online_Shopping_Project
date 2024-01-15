<?php
session_start();

// Make sure you are logged in 
include('./includes/logged_in.php');

$title = "sum";
include('./includes/header.php');
?>

<body>
    <?php
    $error_fields = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        // Validation "not empty and some value should be numeric"
        if (!(isset($_POST['add_name']) && !empty($_POST['add_name']))) {
            $error_fields[] = "Prod_name";
        }
        if (!(isset($_POST['add_category']) && !empty($_POST['add_category']))) {
            $error_fields[] = "category";
        }
        if (!(isset($_POST['add_price']) && !empty($_POST['add_price']))) {
            $error_fields[] = "price";
        }
        if (!is_numeric($_POST['add_price'])) { // not numeric
            $error_fields[] = "price_not_no";
        }
        if (!(isset($_POST['add_warranty']) && !empty($_POST['add_warranty']))) {
            $error_fields[] = "warranty";
        }
        if (!is_numeric($_POST['add_warranty'])) { // not numeric
            $error_fields[] = "warranty_not_no";
        }
        if (!($_POST['add_qty'] >= 0)) {
            $error_fields[] = "qty";
        }
        if (!is_numeric($_POST['add_qty'])) { // not numeric
            $error_fields[] = "qty_not_no";
        }
        if (!(isset($_POST['add_short_desc']) && !empty($_POST['add_short_desc']))) {
            $error_fields[] = "short_desc";
        }
        if (!(isset($_POST['add_long_desc']) && !empty($_POST['add_long_desc']))) {
            $error_fields[] = "long_desc";
        }

        // Setting Errors Array
        $errors = array();

        // **Setting Database File Name
        $all_file = array();

        // Get Info From The Form
        $upload_img = $_FILES['add_img'];
        $img_name = $upload_img['name'];
        $img_type = $upload_img['type'];
        $img_tmp = $upload_img['tmp_name'];
        $img_size = $upload_img['size'];
        $img_error = $upload_img['error'];

        // Set allowed files Extensions
        $allowed_extensions = array('jpg', 'gif', 'jpeg', 'png');

        // Check file is uploaded
        if ($img_error[0] == 4) // No File Uploaded
            $error_fields[] = "empty";


        //Connect to DB
        if (!$error_fields) {
            include './DB-CONFIG.php';
            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
            if (!$con) {
                echo mysqli_connect_errno();
                exit;
            }


            //Escape any sepcial characters to avoid SQL Injection
            $Prod_name = mysqli_escape_string($con, $_POST['add_name']);
            $add_category = mysqli_escape_string($con, $_POST['add_category']);
            $add_price = mysqli_escape_string($con, $_POST['add_price']);
            $add_warranty = mysqli_escape_string($con, $_POST['add_warranty']);
            $add_qty = mysqli_escape_string($con, $_POST['add_qty']);
            $add_public = mysqli_escape_string($con, $_POST['add_public']);
            $add_short_desc = mysqli_escape_string($con, $_POST['add_short_desc']);
            $add_long_desc = mysqli_escape_string($con, $_POST['add_long_desc']);
            $add_below_desc = mysqli_escape_string($con, $_POST['add_below_desc']);
            $Admin_ID = $_SESSION['A_ID'];

            // If you want to publish the product or not
            if (!empty($_POST['add_public'])): // Display
                $add_public = 1;
            else: // Hidden
                $add_public = 0;
            endif;

            // Start Upload The Images
            $files_count = count($img_name);
            for ($i = 0; $i < $files_count; $i++) {

                // Setting Errors Array
                $errors = array();

                //Get files Extension
                $explode_file = explode('.', $img_name[$i]);
                $image_extension[$i] = strtolower(end($explode_file));

                // Get Random Name For File
                $img_random[$i] = rand(0, 10000000000) . '.' . $image_extension[$i];

                // Check fils size
                if ($img_size[$i] > 999999999):
                    $errors[] = "file_size";
                endif;
                // Check if File is valid
                if (!in_array($image_extension[$i], $allowed_extensions)):
                    $errors[] = "not_valid";
                endif;

                // Check If Has No Errors
                if (empty($errors)):

                    // Move The Files
                    $uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '\My_Projects\OunProject1\EgoStore_Main_HTML_Template\Store\assets\images\product\\';
                    move_uploaded_file($img_tmp[$i], "$uploads_dir/$img_name[$i]" . "$img_random[$i]");

                    // **if You Want To Upload These Accepted Files
                    $all_file[] = $img_name[$i] . $img_random[$i];

                else:

                    // <--  error can't print fix this  -->
                    echo '<div style="background-color: #EEE; padding: 10px; margin-bottom: 20px">';
                    echo 'File Number: ' . ($i + 1) . '<br>';
                    echo 'File Name: ' . $img_name[$i] . '<br>';
                    foreach ($errors as $error):

                        echo $error;

                    endforeach;
                    echo '</div>';

                endif;
            }
            $img_field = implode(',', $all_file);
            // End Upload Images in implode Array.
    

            //Insert the data
            $query = "INSERT INTO `product` (`Prod_ID`, `FK_Cate_ID`, `Prod_Name`, `Prod_Published`, `Prod_Long_Desc`, `Prod_Short_Desc`, `Prod_Below_Desc`, `Prod_Price`, `Prod_Stock_Status`, `Prod_Warranty`,`Prod_Img`, `FK_Admin_ID`, `Prod_Date_Added`) 
                                    VALUES (NULL, '$add_category', '$Prod_name', '$add_public' , '$add_long_desc', '$add_short_desc', '$add_below_desc', '$add_price', '$add_qty', '$add_warranty', '$img_field', '$Admin_ID', CURRENT_TIMESTAMP);";
            if (mysqli_query($con, $query)) {
                header("Location: page_ecom_product_add.php");
                exit(0);
            } else {
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
            $active = "product_add";
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
                    <!-- eCommerce Product Add Header -->
                    <?php
                    $act = "Product_Add";
                    include('./includes/page_ecom_dashboard_header.php');
                    ?>
                    <!-- END eCommerce Product Add Header -->

                    <!-- Product add Content -->
                    <div class="block full">
                        <!-- General Data Block -->
                        <!-- General Data Title -->
                        <div class="block-title">
                            <h2><i class="fa fa-plus-square"></i> <strong><b style="color: #32cd32 ">Add New</b>
                                    Product</strong> Data</h2>
                        </div>
                        <!-- END General Data Title -->

                        <!-- General Data Content -->
                        <form action="#" id="formtwo" method="post" enctype="multipart/form-data"
                            class="form-horizontal form-bordered">

                            <div class="form-group">
                                <label class="col-md-3 control-label">Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="add_name"
                                        value="<?= (isset($_POST['add_name'])) ? $_POST['add_name'] : '' ?>"
                                        class="form-control" placeholder="Enter product name..">
                                    <?php if (in_array("Prod_name", $error_fields))
                                        echo "<div class='alert alert-danger'> * Please Enter Product Name</div>"; ?>
                                </div>
                            </div>

                            <?php
                            //Connect to MySQL
                            include './DB-CONFIG.php';
                            $con_2 = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
                            if (!$con_2) {
                                echo mysqli_connect_errno();
                                exit;
                            }
                            // this query to display all categories on option tag
                            $query_categories = "SELECT * FROM categories";
                            $result_categories = mysqli_query($con_2, $query_categories);
                            ?>
                            <div class="form-group">
                                <label class="col-md-3 control-label">Category</label>
                                <div class="col-md-8">
                                    <select name="add_category" class="select-chosen"
                                        data-placeholder="Choose Category.." style="width: 250px;">
                                        <?php while ($row = mysqli_fetch_assoc($result_categories)) { ?>
                                            <option value="<?= $row['Cate_ID'] ?>">
                                                <?= $row['Cate_Name'] ?>
                                            </option>
                                        <?php } ?>
                                    </select>
                                    <?php if (in_array("category", $error_fields))
                                        echo "<div class='text-danger'> * Please Chose The Category </div>"; ?>
                                </div>
                            </div>
                            <?php
                            mysqli_free_result($result_categories);

                            //Close the connection
                            mysqli_close($con_2);
                            ?>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Price</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                        <input type="text" name="add_price"
                                            value="<?= (isset($_POST['add_price'])) ? $_POST['add_price'] : '' ?>"
                                            class="form-control" placeholder="0,00">
                                        <?php
                                        if (in_array("price", $error_fields))
                                            echo "<div class='text-danger'> * Please Enter Price </div>";
                                        elseif (in_array("price_not_no", $error_fields))
                                            echo "<div class='text-danger'> * Should be Number </div>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Warranty</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">Month</div>
                                        <input type="text" name="add_warranty"
                                            value="<?= (isset($_POST['add_warranty'])) ? $_POST['add_warranty'] : '' ?>"
                                            class="form-control" placeholder="Enter number of Month">
                                        <?php
                                        if (in_array("warranty", $error_fields))
                                            echo "<div class='text-danger'> * Please Enter The Number of Months Warranty </div>";
                                        elseif (in_array("warranty_not_no", $error_fields))
                                            echo "<div class='text-danger'> * Should be Number </div>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Quantity</label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <div class="input-group-addon">QTY</div>
                                        <input type="text" name="add_qty"
                                            value="<?= (isset($_POST['add_qty'])) ? $_POST['add_qty'] : '' ?>"
                                            class="form-control" placeholder="Enter Number of QTY">
                                        <?php
                                        if (in_array("qty", $error_fields))
                                            echo "<div class='text-danger'> * Please Enter Number of QTY </div>";
                                        elseif (in_array("qty_not_no", $error_fields))
                                            echo "<div class='text-danger'> * Should be Number </div>";
                                        ?>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Published?</label>
                                <div class="col-md-9">
                                    <label class="switch switch-primary">
                                        <input type="checkbox" name="add_public" <?= (isset($_POST['add_public'])) ? 'checked' : '' ?>><span></span>
                                    </label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Short
                                    Description</label>
                                <div class="col-md-9">
                                    <textarea name="add_short_desc" class="form-control"
                                        rows="3"><?= (isset($_POST['add_short_desc'])) ? $_POST['add_short_desc'] : '' ?></textarea>
                                    <?php if (in_array("short_desc", $error_fields))
                                        echo "<div class='text-danger'> * Please Enter Short Desc </div>"; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Description</label>
                                <div class="col-md-9">
                                    <textarea name="add_long_desc"
                                        class="ckeditor"><?= (isset($_POST['add_long_desc'])) ? $_POST['add_long_desc'] : '' ?></textarea>
                                    <?php if (in_array("long_desc", $error_fields))
                                        echo "<div class='text-danger'> * Please Enter Long Desc </div>"; ?>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Below Description</label>
                                <div class="col-md-9">
                                    <textarea name="add_below_desc"
                                        class="ckeditor"><?= (isset($_POST['add_below_desc'])) ? $_POST['add_below_desc'] : '' ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-3 control-label">Upload File: </label>
                                <div class="col-md-8">
                                    <div class="input-group">
                                        <span class="btn btn-default btn-file">
                                            <input type="file" name="add_img[]" class="file" multiple="multiple"
                                                data-show-upload="false" data-show-caption="true">
                                        </span>
                                    </div>
                                    <?php if (in_array("empty", $error_fields)) {
                                        echo "<div class='text-danger'> * No File Uploaded! </div>";
                                    } else {
                                        if (in_array("file_size", $error_fields)) {
                                            echo "<div class='text-danger'> * Please enter a file size not bigger then 6MB </div>";
                                        }
                                        if (in_array("not_valid", $error_fields)) {
                                            echo "<div class='text-danger'> * File is Not Valid </div>";
                                        }
                                    }
                                    ?>
                                </div>
                            </div><br>

                            <div class="form-group form-actions">
                                <div class="col-md-9 col-md-offset-3">
                                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-floppy-o"></i>
                                        Save</button>
                                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i>
                                        Reset</button>
                                </div>
                            </div>
                        </form>
                        <!-- END General Data Content -->
                    </div>
                    <!-- END Product add Content -->
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


    <!-- ckeditor.js, load it only in the page you would like to use CKEditor (it's a heavy plugin to include it with the others!) -->
    <script src="js/helpers/ckeditor/ckeditor.js"></script>
</body>

</html>