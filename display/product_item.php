<div class="card product-card d-flex" style="width: auto;">
    <img class="card-img-top" src="<?php echo htmlspecialchars("/assets/media/products/".$product['image_url']); ?>"
         alt="<?php echo htmlspecialchars($product['name']); ?>"
         style="max-height: 80%; width: auto;">
    <div class="card-body">
        <h4 class="card-title"><?php echo $product['name']; ?></h4>
        <h5 class="card-text"><?php echo number_format($product['price'], 2) ?></h5>
        <p class="card-text"><?php echo htmlspecialchars(($product['description'])) ?></p>
    </div>
    <div class="card-footer">
        <button class="btn btn-primary add-to-cart" data-product-id="<?php echo $product['productID']; ?>">
            <i class="fa-solid fa-cart-plus"></i>
            Add to Cart
        </button>
    </div>
</div>

