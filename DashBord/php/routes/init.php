<?php

include 'php/dB/db_connect.php';
include 'view/header.php'; 
include 'lib/lang/en.php';
// include 'lib/lang/ar.php';
include 'php/functions/admin_login.php';
if (!isset($noNavBar)) {
    include 'view/navbar.php';
}
