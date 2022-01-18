<?php

function index($view)
{
    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
}

function registerUser()
{
    $user = $_POST;
    $user['password'] = password_hash($_POST['password'], PASSWORD_DEFAULT);

    insert($user, 'users');
}