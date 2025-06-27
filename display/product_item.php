
<link href="../assets/css/style.css" rel="stylesheet"/>
<script type="text/javascript" src="../assets/js/ajax.js"></script>

<div class="card product-card d-flex transparentBack" style="width: auto;">
    <img class="card-img-top" src="<?php echo htmlspecialchars("/assets/media/products/".$product['image_url']); ?>"
         alt="<?php echo htmlspecialchars($product['name']); ?>"
         style="max-height: 80%; width: auto;">
    <div class="card-body roundedBorder">
        <h4 class="card-title"><?php echo $product['name']; ?></h4>
        <h5 class="card-text"><?php echo number_format($product['price'], 2) ?></h5>
        <p class="card-text"><?php echo htmlspecialchars(($product['description'])) ?></p>
    </div>
    <div class="card-footer d-flex justify-content-center">
        <button class="btn btn-primary contact-seller" data-product-id="<?php echo $product['productID']; ?>">
            <i class="fa-solid fa-envelope"></i>
            Contact Seller
        </button>
    </div>
    <?php
    if ( session_status() === PHP_SESSION_ACTIVE && $_SESSION['isAdmin'] )
    {?>
        <div class="card-footer d-flex justify-content-center">
            <button class="deleteProdFeed btn btn-danger" data-product-id="<?php echo $product['productID']; ?>">
                Delete
            </button>
        </div>
    <?php
    }
    ?>

</div>

