<?php
session_start();

 if (isset($_SESSION['username'])) { ?><br><?php
    include 'navbar.php';
    // echo ' welcom'.' '. $_SESSION['username']; 
 }else{
     header('LOCATION: ../index.php');
     exit();
 }

 include '../php/routes/routes.php';

 ?>


