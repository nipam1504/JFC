<?php
session_start();

if ( isset($_SESSION['user_login']) && $_SESSION['user_login'] != '' ) {
    $session_page = $_SESSION['user_login'];

    header('location:session_page/'. $session_page);
    exit();
} else {
    header('location:login.php');
    exit();
}