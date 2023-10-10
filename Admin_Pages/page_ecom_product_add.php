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
                    <div class="row">
                        <div class="col-lg-6">
                            <!-- General Data Block -->
                            <div class="block">
                                <!-- General Data Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-pencil"></i> <strong>General</strong> Data</h2>
                                </div>
                                <!-- END General Data Title -->

                                <!-- General Data Content -->
                                <form action="page_ecom_product_edit.html" method="post"
                                    class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-id">PID</label>
                                        <div class="col-md-9">
                                            <input type="text" id="product-id" name="product-id" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-name">Name</label>
                                        <div class="col-md-9">
                                            <input type="text" id="product-name" name="product-name"
                                                class="form-control" placeholder="Enter product name..">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label"
                                            for="product-description">Description</label>
                                        <div class="col-md-9">
                                            <textarea id="product-description" name="product-description"
                                                class="ckeditor"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-short-description">Short
                                            Description</label>
                                        <div class="col-md-9">
                                            <textarea id="product-short-description" name="product-short-description"
                                                class="form-control" rows="3"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-category">Category</label>
                                        <div class="col-md-8">
                                            <select id="product-category" name="product-category" class="select-chosen"
                                                data-placeholder="Choose Category.." style="width: 250px;">
                                                <option></option>
                                                <!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                                <option value="1">Tablets</option>
                                                <option value="2">Laptops</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-price">Price</label>
                                        <div class="col-md-8">
                                            <div class="input-group">
                                                <div class="input-group-addon"><i class="fa fa-usd"></i></div>
                                                <input type="text" id="product-price" name="product-price"
                                                    class="form-control" placeholder="0,00">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Sock Status</label>
                                        <div class="col-md-9">
                                            <label class="radio-inline" for="product-condition-new">
                                                <input type="radio" id="product-condition-new" name="product-condition"
                                                    value="condition_new" checked> Available
                                            </label>
                                            <label class="radio-inline" for="product-condition-used">
                                                <input type="radio" id="product-condition-used" name="product-condition"
                                                    value="condition_used"> Out of Stock
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Published?</label>
                                        <div class="col-md-9">
                                            <label class="switch switch-primary">
                                                <input type="checkbox" id="product-status" name="product-status"
                                                    checked><span></span>
                                            </label>
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
                                <!-- END General Data Content -->
                            </div>
                            <!-- END General Data Block -->
                        </div>
                        <div class="col-lg-6">
                            <!-- Meta Data Block -->
                            <div class="block">
                                <!-- Meta Data Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-google"></i> <strong>Meta</strong> Data</h2>
                                </div>
                                <!-- END Meta Data Title -->

                                <!-- Meta Data Content -->
                                <form action="page_ecom_product_edit.html" method="post"
                                    class="form-horizontal form-bordered" onsubmit="return false;">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-meta-title">Meta
                                            Title</label>
                                        <div class="col-md-9">
                                            <input type="text" id="product-meta-title" name="product-meta-title"
                                                class="form-control" placeholder="Enter meta title..">
                                            <div class="help-block">55 Characters Max</div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-meta-keywords">Meta
                                            Keywords</label>
                                        <div class="col-md-9">
                                            <input type="text" id="product-meta-keywords" name="product-meta-keywords"
                                                class="form-control" placeholder="keyword1, keyword2, keyword3">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="product-meta-description">Meta
                                            Description</label>
                                        <div class="col-md-9">
                                            <textarea id="product-meta-description" name="product-meta-description"
                                                class="form-control" rows="6"
                                                placeholder="Enter meta description.."></textarea>
                                            <div class="help-block">115 Characters Max</div>
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

                            <!-- Product Images Block -->
                            <div class="block">
                                <!-- Product Images Title -->
                                <div class="block-title">
                                    <h2><i class="fa fa-picture-o"></i> <strong>Product</strong> Images</h2>
                                </div>
                                <!-- END Product Images Title -->

                                <!-- Product Images Content -->
                                <div class="block-section">
                                    <form action="#" class="dropzone"></form>
                                </div>
                                <table class="table table-bordered table-striped table-vcenter">
                                    <tbody>
                                        <tr>
                                            <td style="width: 20%;">
                                                <a href="img/placeholders/photos/photo11.jpg"
                                                    data-toggle="lightbox-image">
                                                    <img src="img/placeholders/photos/photo11.jpg" alt=""
                                                        class="img-responsive center-block" style="max-width: 110px;">
                                                </a>
                                            </td>
                                            <td class="text-center">
                                                <a href="javascript:void(0)" class="btn btn-xs btn-danger"><i
                                                        class="fa fa-trash-o"></i> Delete</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                                <!-- END Product Images Content -->
                            </div>
                            <!-- END Product Images Block -->
                        </div>
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