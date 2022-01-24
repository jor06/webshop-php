<?php

$page = getPage();

$function = getFunction();



if (!empty($page) && file_exists('controllers/' . $page . '.php')) {
    require_once 'controllers/' . $page . '.php';

    $function($page);
}