<script type="text/javascript" src="../assets/js/user_settings.js"></script>


<div class="card product-card d-flex" style="width: auto;">
    <img class="card-img-top" src="<?php echo htmlspecialchars("/assets/media/products/".$product['image_url']); ?>"
         alt="<?php echo htmlspecialchars($product['name']); ?>"
         style="max-height: 80%; width: auto;">
    <div class="card-body">
        <h4 class="card-title"><?php echo $product['name']; ?></h4>
        <h5 class="card-text"><?php echo number_format($product['price'], 2) ?></h5>
        <p class="card-text"><?php echo htmlspecialchars(($product['description'])) ?></p>
    </div>
    <div class="card-footer d-inline-flex justify-content-center sellerOptions">
        <button class="editProduct btn btn-secondary me-2" data-product-id="<?php echo $product['productID']; ?>">
            Edit
        </button>
        <button class="deleteProduct btn btn-danger" data-product-id="<?php echo $product['productID']; ?>">
            Delete
        </button>
    </div>
</div>
