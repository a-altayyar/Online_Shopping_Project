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


//select the Admin ID
//delete.php?id=  => $_GET['id']
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$select = "DELETE FROM `admin_list` WHERE `admin_list`.`Admin_ID` = " . $id . " LIMIT 1;";

if (mysqli_query($con, $select)) {
    header("Location: page_ecom_Admin_view.php");
    exit;
} else {
    //echo $query;
    echo mysqli_error($con);
}

//Close the connection
mysqli_close($con);

?>