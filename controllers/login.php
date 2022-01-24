<?php

function index($view)
{
    if (!array_key_exists('user', $_SESSION)) {
        return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/' . $view . '.view.php';
    }

    return require $_SERVER['DOCUMENT_ROOT'] . '/assets/views/home.view.php';
}

function login()
{
    $query = "SELECT * FROM `users` WHERE `user_name`='" . $_POST['user_name'] . "'";
    $result = query($query);
    $data = $result->fetch(PDO::FETCH_ASSOC);

    if (!$data) {
        $loggedIn = false;
    } else  {
        $loggedIn = password_verify($_POST['password'], $data['password']);
    }

    $user = [
        'user_name' => $data['user_name'],
        'email'     => $data['email'],
        'id'        => $data['id'],
    ];

    $_SESSION['user'] = $user;

    echo json_encode([
        'success'   => $loggedIn,
        'message'   => $loggedIn ? "Login successfull!" : "Login failed",
        'redirect'  => '?page=home',
    ]);
}

