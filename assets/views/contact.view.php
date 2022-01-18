><h1>Contact</h1>

<a href="?page=checkout">Checkout</a>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="?page=contact&action=handleForm&id=<?= $meat !== false ? $meat['id'] : '' ?>">
                <label>Meat name: </label>
                <input type="text" name="name" value="<?= $meat !== false ? $meat['name'] : '' ?>">

                <label>Price: </label>
                <input type="text" name="price" value="<?= $meat !== false ? $meat['price'] : '' ?>">

                <label>Stock: </label>
                <input type="text" name="stock" value="<?= $meat !== false ? $meat['stock'] : '' ?>">

                <label>Image: </label>
                <input type="text" name="image" value="<?= $meat !== false ? $meat['image'] : '' ?>">

                <input type="submit" value="Send form">
            </form>
        </div>
    </div>
</div>