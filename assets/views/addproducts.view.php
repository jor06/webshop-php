><h1>Add Products</h1>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="?page=addproducts&function=handleForm">
                <label>Meat name: </label>
                <input type="text" name="name" value="<?= isset ($meat) ? $meat['name'] : '' ?>">

                <label>Price: </label>
                <input type="text" name="price" value="<?= isset ($meat) ? $meat['price'] : '' ?>">

                <label>Stock: </label>
                <input type="text" name="stock" value="<?= isset ($meat) ? $meat['stock'] : '' ?>">

                <label>Image: </label>
                <input type="text" name="image" value="<?= isset ($meat) ? $meat['image'] : '' ?>">

                <input type="submit" value="Send form">
            </form>
        </div>
    </div>
</div>

