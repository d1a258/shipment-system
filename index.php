<?php 
session_start();
// $noNavBar='';
include 'php/routes/init.php';
include 'view/customer_login.php'; 
include 'view/footer.php'; 

if (isset($_SESSION['username'])) { ?><br><?php
    include 'navbar.php';
    // echo ' welcom'.' '. $_SESSION['username']; 
 }
?>