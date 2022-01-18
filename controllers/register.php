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

    $user = $_POST;

    if (array_key_exists('id', $_GET) && (int)$_GET['id'] > 0) {
        update($user, 'user', $_GET['id']);
    } else {
        $user['created_at'] = date('Y-m-d H:i:s');

        insert($user, 'users');
    }
}

