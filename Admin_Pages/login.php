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
    //We will use it for storing the signed in user data
    session_start();
    $error_fields = array();
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        //Validation
        if (!(isset($_POST['login_email']) && filter_input(INPUT_POST, 'login_email', FILTER_VALIDATE_EMAIL))) {
            $error_fields[] = "email";
        }
        if (!(isset($_POST['login_password']) && strlen($_POST['login_password']) > 5)) {
            $error_fields[] = "Password";
        }


        if (!$error_fields) {
            //Connect to MySQL
            include './DB-CONFIG.php';
            $con = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
            if (!$con) {
                echo mysqli_connect_errno();
                exit;
            }

            //Escape any special characters to avoid SQL Injection
            $user_email = mysqli_escape_string($con, trim($_POST['login_email']));
            $user_password = trim($_POST['login_password']);


            //Select this user
            $sql = "SELECT * FROM admin_list WHERE `Admin_Email` = '" . $user_email . "' LIMIT 1;";

            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_assoc($result);
            if (!empty($_POST['login_password']) && !empty($row['Admin_PSW'])):
                if (password_verify($_POST['login_password'], $row['Admin_PSW'])) {
                    $_SESSION['A_ID'] = $row['Admin_ID'];
                    $_SESSION['A_FName'] = $row['Admin_FName'];
                    $_SESSION['A_LName'] = $row['Admin_LName'];
                    $_SESSION['A_Email'] = $row['Admin_Email'];
                    $_SESSION['A_Photo'] = $row['Admin_Photo'];
                    $_SESSION['A_Crested_at'] = $row['Created_at'];
                    $_SESSION['A_Type'] = $row['Admin_Type'];
                    $_SESSION['A_Phone'] = $row['Admin_Phone'];
                    $_SESSION["user_error"][] = array();
                    header("Location: index.php");
                    exit;
                } else {
                    $error = 'Invalid email or password';
                }
            else:
                $error = 'Invalid email or password';
            endif;

            //Close The Connection
            mysqli_free_result($result);
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
            <form action="#" method="post" id="form-login"
                class="form-horizontal form-bordered form-control-borderless">
                <div class="form-group">
                    <div class="col-xs-12">
                        <?php if (isset($error)):
                            echo "<div class='alert alert-danger'>
                                    <strong>Danger! </strong>" . $error . "</div>";
                        endif;
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
                <div class="form-group form-actions">
                    <div class="col-xs-4">
                        <label class="switch switch-primary" data-toggle="tooltip" title="Remember Me?">
                            <input type="checkbox" id="login-remember-me" name="login-remember-me" checked>
                            <span></span>
                        </label>
                    </div>
                    <div class="col-xs-8 text-right">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Login to
                            Dashboard</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <a href="javascript:void(0)" id="link-reminder-login"><small>Forgot password?</small></a> -
                        <a href="#"><small>Contact Us</small></a>
                    </div>
                </div>
            </form>
            <!-- END Login Form -->

            <!-- Reminder Form -->
            <form action="login.html#reminder" method="post" id="form-reminder"
                class="form-horizontal form-bordered form-control-borderless display-none">
                <div class="form-group">
                    <div class="col-xs-12">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="gi gi-envelope"></i></span>
                            <input type="text" id="reminder-email" name="reminder-email" class="form-control input-lg"
                                placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-xs-12 text-right">
                        <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-angle-right"></i> Reset
                            Password</button>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12 text-center">
                        <small>Did you remember your password?</small> <a href="javascript:void(0)"
                            id="link-reminder"><small>Login</small></a>
                    </div>
                </div>
            </form>
            <!-- END Reminder Form -->
        </div>
        <!-- END Login Block -->

        <!-- Footer -->
        <footer class="text-muted text-center">
            <small><span id="year-copy"></span> &copy; <a href="#" target="_blank">EgooStore
                    Team
                    3.8</a></small>
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