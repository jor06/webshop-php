<?php

function updateCart()
{
    $_SESSION['cart'] = [
        [
            'id' => 1,
            'name' => 'meat 1',
        ],

        [
            'id' => 2,
            'name' => 'meat 2',
        ],
    ];
}