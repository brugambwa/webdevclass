<?php

session_start();
ini_set('display_errors', 1);
require 'config.php';
include('config/app.php');

$newapp = new App();

if (isset($_GET['page'])) {
    $page = $_GET['page'];
    if ($page == 'logout') {
        $_SESSION = array();
        session_destroy();
    }
} else {
    $page = 'apps';
}

$pageload = $page . '.php';

if (isset($_SESSION) && $_SESSION['isloggedin']) {
    include('views/header.php');
    if (in_array($page, $_SESSION['access_rights'])) {
        include('views/app/' . $pageload);
    } else {
        include('views/accessdenied.php');
    }
    include('views/footer.php');
} else {
    header("Location: login.php");
}






