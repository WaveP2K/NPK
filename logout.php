<?php 
    session_start();
    include 'config/db.php';
    session_destroy();
    header('location: index.php')
?>