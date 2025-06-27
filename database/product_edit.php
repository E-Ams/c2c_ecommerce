<?php

include_once "../config.php";

$prodID = $_GET['id'];

session_start();
$conn = connectDB();


$product = getProduct($prodID);

$prodName = $product['name'];
$prodDesc = $product['description'];
$prodPrice = $product['price'];
$prodStock = $product['stock'];
$prodImage = "../assets/media/products/".$product['image_url'];

?>

<body>
<link href="../assets/css/dashboard.css" rel="stylesheet"/>

<div>
    <form class="mb-3 form-horizontal" action="../database/product_update.php" method="post">
        <div class="mb-3 mt-3">
            <div class="row">
                <div class="col-sm-12 d-flex justify-content-center">
                    <img src="<?php echo $prodImage ?>" alt="Product Image" style="width:200px;height:200px;" >
                </div>
            </div>
            <br/>
            <br/>

            <div class="row mb-3">
                <label hidden="hidden" for="prodID" class="form-label col-sm-2 col-form-label">Product ID:</label>
                <div class="col-sm-10">
                    <input hidden="hidden" type="text" class="form-control" id="prodID" name="prodID"
                           placeholder="<?php echo $prodID; ?>" readonly value="<?php echo $prodID; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="prodName" class="form-label col-sm-2 col-form-label text-end prodEditLabel">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="prodName"
                           name="prodName" value="<?php echo $prodName; ?>">
                </div>
            </div>

            <div class="row mb-3">
                <label for="prodDesc" class="form-label col-sm-2 col-form-label text-end prodEditLabel">Description:</label>
                <div class="col-sm-10">
                    <textarea rows="5" class="form-control" id="prodDesc"
                              name="prodDesc"><?php echo $prodDesc; ?></textarea>
                </div>
            </div>

            <div class="row mb-3">
                <label for="prodPrice" class="form-label col-sm-2 col-form-label text-end prodEditLabel">Price:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="prodPrice"
                           name="prodPrice" value="<?php echo $prodPrice; ?>">
                </div>
            </div>


            <div class="row mb-3">
                <label for="prodStock" class="form-label col-sm-2 col-form-label text-end prodEditLabel">Stock:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="prodStock"
                           name="prodStock" value="<?php echo $prodStock; ?>">
                </div>
            </div>

        </div>
        <div class="row mb-3">
            <div class="col-sm-12 d-flex justify-content-center">
                <button name="_btnUpdateProd" id="_btnUpdateProd" type="submit"
                        class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>
</body>
