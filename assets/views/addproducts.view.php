<h1>Add Products</h1>

<div class="container-fluid" id="shop">
<cart-form ref="cartComponent" class="cart"></cart-form>

    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="?page=addproducts&function=handleForm">
                <div class="mb-3">
                    <label for="name" class="form-label">Product Name: </label>
                    <input type="text" name="name" value="<?= isset ($meat) ? $meat['name'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="price" class="form-label">Product Price: </label>
                    <input type="text" name="price" value="<?= isset ($meat) ? $meat['price'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="stock" class="form-label">Product Stock: </label>
                    <input type="text" name="stock" value="<?= isset ($meat) ? $meat['stock'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="image" class="form-label">Image Name: </label>
                    <input type="text" name="image" value="<?= isset ($meat) ? $meat['image'] : '' ?>">
                </div>
                <div class="mb-3">
                    <label for="descr" class="form-label">Description: </label>
                    <input type="text" name="image" value="<?= isset ($meat) ? $meat['descr'] : '' ?>">
                </div>
                <button type="submit" class="btn btn-primary">Add Product</button>
            </form>
        </div>
    </div>
</div>

