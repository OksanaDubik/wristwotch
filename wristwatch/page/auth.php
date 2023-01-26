<?php

session_start();
$address = $_REQUEST['address'] ?? null;

if ($address !== null && !empty($address)) {
    $_SESSION['address'] = $address;
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}


if (isset($_SESSION['address'])) {
    $address = $_SESSION['address'];
}

if (isset ($_REQUEST['logout'])) {
    session_destroy();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}

