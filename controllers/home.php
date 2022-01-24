<?php

function index($view)
{

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function getData()
{
    $sql = "SELECT * FROM `products` WHERE `deleted_at` IS NULL";
    $res = query($sql);

    $shoppingCart = array_key_exists('cart', $_SESSION) ? json_decode($_SESSION['cart']) : [];

    $meats = [];

    $index = 0;

    while ($meat = $res->fetch(PDO::FETCH_ASSOC)) {
        $meats[$index] = $meat;
        $meats[$index]['price'] = (int)$meat['price'];
        $meats[$index]['stock'] = (int)$meat['stock'];

        if (count($shoppingCart)) {
            foreach ($shoppingCart as $key => $product) {
                dd($meat, $product);
                
                if ($meat['id'] === $product['id']) {
                }
            }
        }

        $index++;
    }

    echo json_encode([
        'success'   => true,
        'meats'    => $meats,
    ]);
}

function loginSucces()
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/home.view.php';
};

