<?php
session_start();

// Make sure you are logged in 
include('./logged_in.php');
?>

<?php
// Connect to DB
include '../DB-CONFIG.php';
$con_2 = mysqli_connect(DBHOST, DBUSER, DBPWD, DBNAME);
if (!$con_2) {
    echo mysqli_connect_errno();
    exit;
}

//select the Admin ID
$select = "SELECT * FROM `admin_list` WHERE `admin_list`.`Admin_ID` = " . $_SESSION['A_ID'] . " LIMIT 1";
$result = mysqli_query($con_2, $select);
$row = mysqli_fetch_assoc($result);




$user_error_fields = array();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    //Validation
    if (!(isset($_POST['user_settings_FName']) && !empty($_POST['user_settings_FName']))) {
        $user_error_fields[] = "user_FName";
    }
    if (!(isset($_POST['user_settings_LName']) && !empty($_POST['user_settings_LName']))) {
        $user_error_fields[] = "user_LName";
    }
    if (!(isset($_POST['user_settings_email']) && filter_input(INPUT_POST, 'user_settings_email', FILTER_VALIDATE_EMAIL))) {
        $user_error_fields[] = "user_email";
    }
    if (!(isset($_POST['user_settings_Phone']) && !empty($_POST['user_settings_Phone']))) {
        $user_error_fields[] = "user_Phone_No";
    }
    if (!is_numeric($_POST['user_settings_Phone'])) { // not numeric
        $user_error_fields[] = "user_Phone_not_numeric";
    }
    if (strlen($_POST['user_settings_Phone']) == 9) { // equals 10 numbers
        $user_error_fields[] = "user_Phone_less";
    }
    // if (!(isset($_POST['login_password']) && strlen($_POST['login_password']) > 5)) {
    //     $user_error_fields[] = "Password";
    // }


    // Get Info From The Form
    $upload_img = $_FILES['user_settings_Photo'];
    $img_name = $upload_img['name'];
    $img_type = $upload_img['type'];
    $img_tmp = $upload_img['tmp_name'];
    $img_size = $upload_img['size'];
    $img_error = $upload_img['error'];

    // Set allowed files Extensions
    $allowed_extensions = array('jpg', 'gif', 'jpeg', 'png');
    //Get files Extension
    $tmp = explode('.', $img_name);
    $image_extension = strtolower(end($tmp));


    // Check file is uploaded
    if ($img_error == 4) {
        $user_error_fields[] = "user_empty";
    } else {
        // Check fils size
        if ($img_size > 80000) {
            $user_error_fields[] = "user_file_size";
        }
        // Check if File is valid
        if (!in_array($image_extension, $allowed_extensions)) {
            $user_error_fields[] = "user_not_valid";
        }

    }

    if (!$user_error_fields) {

        //Escape any sepcial characters to avoid SQL Injection
        // trim to deal with the unneeded white lift and right spaces 
        $A_FName = mysqli_escape_string($con_2, $_POST['user_settings_FName']);
        $A_LName = mysqli_escape_string($con_2, $_POST['user_settings_LName']);
        $A_Phone = mysqli_escape_string($con_2, trim($_POST['user_settings_Phone']));
        $A_Email = mysqli_escape_string($con_2, trim($_POST['user_settings_email']));
        // $A_Password = password_hash(trim($_POST['login_password']), PASSWORD_DEFAULT);

        // Get Random Name For File
        $img_random = rand(0, 10000000000) . '.' . $image_extension;

        $uploads_dir = $_SERVER['DOCUMENT_ROOT'] . '\My_Projects\Online_Shopping_Project\Admin_Pages\img\Personal_Photos\\';
        $path = $uploads_dir . $_SESSION['A_Photo'];
        if (unlink($path)) {
            if ($img_error == UPLOAD_ERR_OK) {
                $avatar = basename($img_name);
                move_uploaded_file($img_tmp, "$uploads_dir/$avatar" . "$img_random");

            } else {
                echo "File can't be uploaded";
                exit;
            }
        } else {
            echo "File can't be Deleted";
            exit;
        }


        //Update the data
        $query = "UPDATE `admin_list` SET `Admin_FName` = '$A_FName', `Admin_LName` = '$A_LName', `Admin_Email` = '$A_Email', `Admin_Phone` = '$A_Phone', `Admin_Photo` = '$avatar" . "$img_random' WHERE `admin_list`.`Admin_ID` = " . $_SESSION['A_ID'] . " LIMIT 1;";
        if (mysqli_query($con_2, $query)) {
            $_SESSION['A_FName'] = $A_FName;
            $_SESSION['A_LName'] = $A_LName;
            $_SESSION['A_Phone'] = $A_Phone;
            $_SESSION['A_Email'] = $A_Email;
            $_SESSION['A_Photo'] = $avatar . $img_random;
            header("Location: ../index.php");
            exit;
        } else {
            //echo $query;
            echo mysqli_error($con_2);
        }
    } else {
        unset($_SESSION['user_error']);
        $_SESSION["user_error"] = $user_error_fields;
        header("Location: ../index.php");
        exit;
    }

    //Close the connection
    mysqli_close($con_2);
}
?>