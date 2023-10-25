<!DOCTYPE html>
<!--[if IE 9]>         <html class="no-js lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<head>
    <meta charset="utf-8">

    <title>ProUI - Responsive Bootstrap Admin Template</title>

    <meta name="description"
        content="ProUI is a Responsive Bootstrap Admin Template created by pixelcave and published on Themeforest.">
    <meta name="author" content="pixelcave">
    <meta name="robots" content="noindex, nofollow">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0">

    <!-- Icons -->
    <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
    <link rel="shortcut icon" href="img/favicon.png">
    <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
    <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
    <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
    <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
    <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
    <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
    <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
    <link rel="apple-touch-icon" href="img/icon180.png" sizes="180x180">
    <!-- END Icons -->

    <!-- Stylesheets -->
    <!-- Bootstrap is included in its original form, unaltered -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <!-- Related styles of various icon packs and plugins -->
    <link rel="stylesheet" href="css/plugins.css">

    <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
    <link rel="stylesheet" href="css/main.css">

    <!-- Include a specific file here from css/themes/ folder to alter the default theme of the template -->

    <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
    <link rel="stylesheet" href="css/themes.css">
    <!-- END Stylesheets -->

    <!-- Modernizr (browser feature detection library) -->
    <script src="js/vendor/modernizr.min.js"></script>
</head>

<body>

    <?php
    session_start();

    // Make sure you are logged in 
    include('./includes/logged_in.php');


    $error_fields = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {


        //Validation
        if (!(isset($_POST['F_Name']) && !empty($_POST['F_Name']))) {
            $error_fields[] = "F_Name";
        }
        if (!(isset($_POST['L_Name']) && !empty($_POST['L_Name']))) {
            $error_fields[] = "L_Name";
        }
        if (!(isset($_POST['Phone_No']) && !empty($_POST['Phone_No']))) {
            $error_fields[] = "Phone_No";
        }
        if (!is_numeric($_POST['Phone_No'])) { // not numeric
            $error_fields[] = "Phone_not_numeric";
        }
        if (strlen($_POST['Phone_No']) == 9) { // equals 10 numbers
            $error_fields[] = "Phone_less";
        }
        if (!(isset($_POST['login_email']) && filter_input(INPUT_POST, 'login_email', FILTER_VALIDATE_EMAIL))) {
            $error_fields[] = "email";
        }
        if (!(isset($_POST['login_password']) && strlen($_POST['login_password']) > 5)) {
            $error_fields[] = "Password";
        }

        //Connect to DB
        if (!$error_fields) {
            include './DB-CONFIG.php';
            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
            if (!$con) {
                echo mysqli_connect_errno();
                exit;
            }


            //Escape any sepcial characters to avoid SQL Injection
            // trim to deal with the unneeded white lift and right spaces 
            $A_FName = mysqli_escape_string($con, $_POST['F_Name']);
            $A_LName = mysqli_escape_string($con, $_POST['L_Name']);
            $A_Phone = mysqli_escape_string($con, trim($_POST['Phone_No']));
            $A_Email = mysqli_escape_string($con, trim($_POST['login_email']));
            $A_Password = password_hash(trim($_POST['login_password']), PASSWORD_DEFAULT);
            $A_Type = mysqli_escape_string($con, $_POST['Admin_Type']);

            //Insert the data
            $query = "INSERT INTO `admin_list` (`Admin_ID`, `Admin_FName`, `Admin_LName`, `Admin_Phone`, `Admin_Email`, `Admin_PSW`, `Admin_Type`)
                                VALUES (NULL, '$A_FName', '$A_LName', '$A_Phone', '$A_Email', '$A_Password', '$A_Type');";
            if (mysqli_query($con, $query)) {
                header("Location: index.php");
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
    <!-- Login Background -->
    <div id="login-background">
        <!-- For best results use an image with a resolution of 2560x400 pixels (prefer a blurred image for smaller file size) -->
        <img src="img/placeholders/headers/login_header.jpg" alt="Login Background" class="animation-pulseSlow">
    </div>
    <!-- END Login Background -->

    <!-- Login Container -->
    <div id="login-container" class="animation-fadeIn">
        <!-- Login Title -->
        <div class="login-title text-center">
            <img style="width:150px" src="img/logo/Logo_Egoo.png" alt="">
            <h1><small>Please <strong>Login</strong></small></h1>
        </div>
        <!-- END Login Title -->

        <!-- Login Block -->
        <div class="block push-bit">
            <!-- Login Form -->
            <form action="#" method="post" enctype="multipart/form-data"
                class="form-horizontal form-bordered form-control-borderless">
                <div class="form-group">
                    <div class="col-xs-12">
                        <?php if (isset($error))
                            echo $error; ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-user"></i></span>
                            <input type="text" name="F_Name"
                                value="<?= (isset($_POST['F_Name'])) ? $_POST['F_Name'] : '' ?>"
                                class="form-control input-lg" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <input type="text" name="L_Name"
                            value="<?= (isset($_POST['L_Name'])) ? $_POST['L_Name'] : '' ?>"
                            class="form-control input-lg" placeholder="Last Name">
                    </div>
                    <?php if (in_array("F_Name", $error_fields))
                        echo "<span class='text-danger'>
                        * Please enter Your First Name</span>";
                    if (in_array("L_Name", $error_fields))
                        echo "<br><span class='text-danger'>
                        * Please enter Your Last Name</span>"; ?>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                            <input type="text" name="Phone_No"
                                value="<?= (isset($_POST['Phone_No'])) ? $_POST['Phone_No'] : '' ?>"
                                class="form-control input-lg" placeholder="Phone Number">
                        </div>
                        <?php
                        if (in_array("Phone_No", $error_fields))
                            echo "<span class='text-danger'>
                            * Please enter Your Phone Number</span>";
                        elseif (in_array("Phone_not_numeric", $error_fields))
                            echo "<span class='text-danger'>
                            * Should be Number</span>";
                        elseif (in_array("Phone_less", $error_fields))
                            echo "<span class='text-danger'>
                        ** Please enter Phone Number not less then 10 Numbers</span>";
                        ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                            <input type="text" name="login_email"
                                value="<?= (isset($_POST['login_email'])) ? $_POST['login_email'] : '' ?>"
                                class="form-control input-lg" placeholder="Email">
                        </div>
                        <?php if (in_array("email", $error_fields))
                            echo "<span class='text-danger'>
                            * Please enter a valid email</span>"; ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                            <input type="password" name="login_password"
                                value="<?= (isset($_POST['login_password'])) ? $_POST['login_password'] : '' ?>"
                                class="form-control input-lg" placeholder="Password">
                        </div>
                        <?php if (in_array("Password", $error_fields))
                            echo "<span class='text-danger'>
                            * Please enter a password not less then 6 characters</span>"; ?>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-asterisk"></i></span>
                            <input type="password" id="register-password-verify" name="register-password-verify"
                                class="form-control input-lg" placeholder="Verify Password">
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-xs-6">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-briefcase"></i></span>
                            <input type="radio" name="Admin_Type" value="SY" <?= (isset($_POST['Admin_Type']) && $_POST['Admin_Type'] == "SY") ? 'checked' : '' ?>> System Administrator
                            <input type="radio" name="Admin_Type" value="DB" <?= (isset($_POST['Admin_Type']) && $_POST['Admin_Type'] == "DB") ? 'checked' : '' ?>> DB Administrator
                        </div>
                    </div>
                </div>

                <div class="form-group form-actions">
                    <div class="col-xs-8 text-center">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Register
                        </button>
                        <button type="button" class="btn btn-sm btn-danger"
                            onclick="if(confirm('Action Cancel.\nClick OK to continue.')) window.location='index.php';"><i
                                class="fa fa-angle-right"></i> Cancel
                        </button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <small>Do you have an account?</small> <a href="javascript:void(0)"
                            id="link-register"><small>Login</small></a> -
                        <a href="#" id="link-register-login"><small>Contact Us</small></a>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->

            <!-- Footer -->
            <footer class="text-muted text-center">
                <small><span id="year-copy"></span> &copy; <a href="#" target="_blank"></a></small>
            </footer>
            <!-- END Footer -->
        </div>
        <!-- END Login Container -->

        <!-- jQuery, Bootstrap.js, jQuery plugins and Custom JS code -->
        <script src="js/vendor/jquery.min.js"></script>
        <script src="js/vendor/bootstrap.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/app.js"></script>

        <!-- Load and execute javascript code used only in this page -->
        <script src="js/pages/login.js"></script>
        <script>$(function () { Login.init(); });</script>
</body>

</html>