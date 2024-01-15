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

//delete.php?id=  => $_GET['id']
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$select = "SELECT * FROM product WHERE `product`.`Prod_ID` = " . $id . " LIMIT 1";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($result);

/*  delete images from folders.  */
if (!empty($row['Prod_Img'])) {

    $explode_file = explode(',', $row['Prod_Img']);

    foreach ($explode_file as $file):

        $photo_path = "\img\product\\" . $file;

        // Make sure the file exists, then delete it from folders and then from DB.
        if (file_exists($photo_path)) {
            unlink($photo_path);
        }
    endforeach;
}


//select the product ID
$select = "DELETE FROM `product` WHERE `product`.`Prod_ID` = " . $id . " LIMIT 1;";

if (mysqli_query($con, $select)) {
    header("Location: page_ecom_products.php");
    exit;
} else {
    //echo $query;
    echo mysqli_error($con);
}

//Close the connection
mysqli_close($con);

?>