<div class="modal fade" id="addProduct">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Add Product</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <!-- Modal body -->
            <div class="modal-body p-5">
                <form enctype="multipart/form-data" class="mb-3" name="login" id="loginForm" action="../database/product_add.php" method="post">
                    <label for="_name" class="form-label" >Name: </label>
                    <input class="form-control" type="text" id="_name" name="_name" placeholder="Name" required><br/>
                    <label for="_desc" class="form-label">Description: </label>
                    <textarea class="form-control" type="text" id="_desc"
                              name="_desc" placeholder="Description" required></textarea><br/>

                    <label for="_price" class="form-label">Price: </label>
                    <input class="form-control" type="number" id="_price"
                           name="_price" placeholder="Price" required><br/>

                    <label for="_stock" class="form-label">Stock: </label>
                    <input class="form-control" type="number" id="_stock"
                            name="_stock" placeholder="0" required><br/>

                    <input type="file" id="_img" name = "_img" accept="image/png, image/jpeg, image/webp"><br/>

                    <button class="btn btn-success" type="submit" name="_btnLogin" id="_btnLogin">Add Product</button>
                </form>
            </div>
        </div>
    </div>
</div