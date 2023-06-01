<?php 
    session_start();
    include 'config/db.php';

    if (isset($_POST['search'])) {
        $class = $_POST['class'];
        $room = $_POST['room'];
        $date = $_POST['date'];

        if(empty($class)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อผู้ใช้';
            header('location: index.php');
        } else {
                $_SESSION['class_room'] = "$class/$room";
                $_SESSION['date'] = $date;
                header('location: history_check.php');
            }
        } else {
            $_SESSION['error'] = 'ไม่มีข้อมูลในระบบ';
                header('location: index.php');
        }

?>