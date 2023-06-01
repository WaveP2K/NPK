<?php 
    session_start();
    include 'config/db.php';
    if (isset($_POST['login'])) {
        header('location: logout.php')
     }
?>