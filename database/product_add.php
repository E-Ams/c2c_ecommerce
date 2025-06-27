<?php
include_once '../config.php';

$prodName = $_POST['_name'];
$prodDesc = $_POST['_desc'];
$prodPrice = $_POST['_price'];
$prodStock = $_POST['_stock'];

$tempImgPath = $_FILES['_img']['tmp_name'];

$prodImg = $_FILES['_img'];
$prodImgName = $_FILES['_img']['name'];

$imgFolder = "../assets/media/products/";

$conn = connectDB();

if (isset($_FILES['_img']) && $_FILES['_img']['error'] === UPLOAD_ERR_OK)
{
    if (!is_dir(filename: $imgFolder))
    {
        mkdir(directory: $imgFolder, permissions: 0755, recursive: true);
    }

    $dest  = $imgFolder . basename(path: $prodImgName);

    if (move_uploaded_file(from: $prodImg['tmp_name'], to: $dest))
    {
        echo "The file ". basename( $prodImgName ). " has been uploaded.";

        if (!empty($prodName) && !empty($prodDesc) && !empty($prodPrice) && !empty($prodStock))
        {
            addProduct( $prodName, $prodDesc, $prodPrice, $prodStock, $prodImgName);
        }

        header("refresh:0.5; url=../display/home.php");
    }
    else
    {
        echo "Sorry, there was an error uploading your file.";
    }
}
else
{
    if (!empty($prodName) && !empty($prodDesc) && !empty($prodPrice) && !empty($prodStock))
    {
        addProduct( $prodName, $prodDesc, $prodPrice, $prodStock, $prodImgName);
    }

    header("refresh:0.5; url=../display/home.php");
}

