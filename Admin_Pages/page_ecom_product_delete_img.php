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

// the "index" is the index of the image in the DB that will be deleted 
$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
$index = filter_input(INPUT_GET, 'index', FILTER_SANITIZE_NUMBER_INT);
$photo_name = $_GET['name'];

$select = "SELECT * FROM product WHERE `product`.`Prod_ID` = " . $id . " LIMIT 1";
$result = mysqli_query($con, $select);
$row = mysqli_fetch_assoc($result);


$photo_path = "img/product/" . $photo_name;

// Make sure the file exists, then delete it from folders and then from DB.
if (file_exists($photo_path)) {

    /*  delete it from folders.  */
    unlink($photo_path);

    /*  Create a new Array excluding the image sent to us by GET['index'] and then upload the new Array to DB.  */
    $explode_file = explode(',', $row['Prod_Img']);
    $new_photo = array();

    for ($i = 0; $i < count($explode_file); $i++) {
        if ($i == $index)
            continue;

        $new_photo[$i] = $explode_file[$i];
    }

    $img_field = implode(',', $new_photo);

    $query = "UPDATE `product` SET `Prod_Img` = '$img_field' WHERE `product`.`Prod_ID` = '$id' LIMIT 1;";
    if (mysqli_query($con, $query)) {
        header("Location: page_ecom_product_edit.php?id=$id");
        exit;
    } else {
        echo mysqli_error($con);
    }

} else {
    header("Location: page_ecom_product_edit.php?id=$id");
    exit;
}

mysqli_close($con);
?>