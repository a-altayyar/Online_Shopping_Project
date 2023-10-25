<!-- Scroll to top link, initialized in js/app.js - scrollToTop() -->
<a href="#" id="to-top"><i class="fa fa-angle-double-up"></i></a>

<!-- User Settings, modal which opens from Settings link (found in top right user menu) and the Cog link (found in sidebar user info) -->
<div id="modal-user-settings" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header text-center">
                <h2 class="modal-title"><i class="fa fa-pencil"></i> Settings</h2>
            </div>
            <!-- END Modal Header -->

            <!-- Modal Body -->
            <div class="modal-body">

                <form action="./includes/footer_user_settings.php" method="post" class="form-horizontal form-bordered"
                    enctype="multipart/form-data">
                    <fieldset>
                        <legend>Vital Info</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label">Admin ID: </label>
                            <div class="col-md-8">
                                <p class="form-control-static">
                                    <?= $_SESSION['A_ID'] ?>
                                </p>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">First Name: </label>
                            <div class="col-md-8">
                                <input type="text" name="user_settings_FName" class="form-control"
                                    value="<?= (!empty($_SESSION['A_FName'])) ? $_SESSION['A_FName'] : '' ?>"
                                    placeholder="First Name">

                                <?php
                                // (isset($_POST['user_settings_FName'])) ? $_POST['user_settings_FName'] : $row['Admin_FName']
                                if (in_array("user_FName", $_SESSION['user_error']))
                                    echo "<div class='alert alert-danger'> * Please Enter Your First Name</div>";
                                ?>

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Last Name: </label>
                            <div class="col-md-8">
                                <input type="text" name="user_settings_LName" class="form-control"
                                    value="<?= (!empty($_SESSION['A_LName'])) ? $_SESSION['A_LName'] : '' ?>"
                                    placeholder="Last Name">
                                <?php
                                // (isset($_POST['user_settings_LName'])) ? $_POST['user_settings_LName'] : $row['Admin_LName']
                                if (in_array("user_LName", $_SESSION['user_error']))
                                    echo "<div class='alert alert-danger'> * Please Enter Your Last Name</div>";
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Email: </label>
                            <div class="col-md-8">
                                <input type="email" name="user_settings_email" class="form-control"
                                    value="<?= (!empty($_SESSION['A_Email'])) ? $_SESSION['A_Email'] : '' ?>"
                                    placeholder="admin@example.com">
                                <?php
                                // (isset($_POST['user_settings_email'])) ? $_POST['user_settings_email'] : $row['Admin_Email'] 
                                if (in_array("user_FName", $_SESSION['user_error']))
                                    echo "<div class='alert alert-danger'> * Please Enter Your First Name</div>";
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Phone Number: </label>
                            <div class="col-md-8">
                                <input type="text" name="user_settings_Phone" class="form-control"
                                    value="<?= (!empty($_SESSION['A_Phone']) && isset($_SESSION['user_error'])) ? $_SESSION['A_Phone'] : '' ?>"
                                    placeholder="055 555 5555">
                                <?php
                                // (!empty($_SESSION['user_error'])) ? $_POST['user_settings_Phone'] : $row['Admin_Phone'] 
                                if (in_array("user_Phone_No", $_SESSION['user_error']))
                                    echo "<span class='text-danger'>
                                    * Please enter Your Phone Number</span>";
                                elseif (in_array("user_Phone_not_numeric", $_SESSION['user_error']))
                                    echo "<span class='text-danger'>
                                        * Should be Number</span>";
                                elseif (in_array("user_Phone_less", $_SESSION['user_error']))
                                    echo "<span class='text-danger'>
                                        ** Please enter Phone Number not less then 10 Numbers</span>";
                                ?>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="col-md-4 control-label">Personal Photo: </label>
                            <div class="col-md-8">
                                <input type="file" name="user_settings_Photo"
                                    value="">
                                <?php
                                if (in_array("user_empty", $_SESSION['user_error'])) {
                                    echo "<div class='text-danger'> * No File Uploaded! </div>";
                                } else {
                                    if (in_array("user_file_size", $_SESSION['user_error'])) {
                                        echo "<div class='text-danger'> * Please enter a file size not bigger then 6MB </div>";
                                    }
                                    if (in_array("user_not_valid", $_SESSION['user_error'])) {
                                        echo "<div class='text-danger'> * File is Not Valid </div>";
                                    }
                                }
                                ?>
                            </div>
                        </div>

                        <!-- 
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-notifications">Email
                                Notifications</label>
                            <div class="col-md-8">
                                <label class="switch switch-primary">
                                    <input type="checkbox" id="user-settings-notifications"
                                        name="user-settings-notifications" value="1" checked>
                                    <span></span>
                                </label>
                            </div>
                        </div> -->
                    </fieldset>

                    <!-- <fieldset>
                        <legend>Password Update</legend>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-password">New Password</label>
                            <div class="col-md-8">
                                <input type="password" id="user-settings-password" name="user-settings-password"
                                    class="form-control" placeholder="Please choose a complex one..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="user-settings-repassword">Confirm New
                                Password</label>
                            <div class="col-md-8">
                                <input type="password" id="user-settings-repassword" name="user-settings-repassword"
                                    class="form-control" placeholder="..and confirm it!">
                            </div>
                        </div>
                    </fieldset> -->
                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <button type="button" class="btn btn-sm btn-default" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-sm btn-primary">Save Changes</button>
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-xs-12 text-right">
                            <?php
                            // print_r($_SESSION["user_error"]);
                            ?>
                        </div>
                    </div>

                </form>
            </div>
            <!-- END Modal Body -->
        </div>
    </div>
</div>
<!-- END User Settings -->

<!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
<script src="js/vendor/jquery.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/plugins.js"></script>
<script src="js/app.js"></script>