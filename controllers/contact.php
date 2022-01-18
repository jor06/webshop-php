<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function handleForm($view)
{
    if ($_SERVER['REQUEST_METHOD'] != 'POST') {
        die('go away! only posting here!');
    }

    $meat = $_POST;

    if (array_key_exists('id', $_GET) && (int)$_GET['id'] > 0) {
        update($meat, 'products', $_GET['id']);
    } else {
        $meat['created_at'] = date('Y-m-d H:i:s');

        insert($meat, 'products');
    }
}

function editRecord($view = null)
{
    if (array_key_exists('id', $_GET) && (int)$_GET['id'] > 0) {
        $query = "SELECT * FROM `products` WHERE `id`=" . $_GET['id'];
        $result = query($query);

        $meat = $result->fetch(PDO::FETCH_ASSOC);

        if ($meat === false) {
            die('This record does not exist');
        } 
    }
    
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}