<?php
include_once '../config.php';

$prodID = $_POST['prodID'];
$name = $_POST['prodName'];
$description = $_POST['prodDesc'];
$price = $_POST['prodPrice'];
$stock = $_POST['prodStock'];


if( isset( $_POST['_btnUpdateProd'] ) )
{
    $conn = connectDB();

    $query = updateProduct($conn, $prodID, $name, $description, $price, $stock);

    if ($query)
    {
        header('Location: ../display/dashboard.php');
    }
}
