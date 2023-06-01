<?php 
    session_start();
    include 'config/db.php';

    if (isset($_POST['submit'])) {
        $check = $_POST['check'];
        $id = $_SESSION['id'];
        $name = $_SESSION['name'];
        $lastname = $_SESSION['lastname'];
        $class = $_SESSION['class'];
        $room = $_SESSION['room'];
        $d = date('Y-m-d');
        $t = date('H:i:s', time());
        
        if(empty($id)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อผู้ใช้';
            header('location: index.php');
        }else{
            $check_user = "SELECT * FROM history WHERE id = '$id'";
            $query = mysqli_query($conn, $check_user);
            $result = mysqli_fetch_assoc($query);
        if ($result['id'] === $id) {
            $_SESSION['error'] = 'คุณเช็คชื่อไปแล้ว';
            header('location: home.php');
        }else {
            $check_user = "INSERT INTO history (id, name, lastname, class, room, status, time, date) VALUES ('$id', '$name', '$lastname', '$class', '$room', '$check', '$t', '$d')";
            $query = mysqli_query($conn, $check_user);
                    
            $_SESSION['success'] = 'เช็คชื่อเรียบร้อยแล้ว';
            header('location: home.php');
            }
        }
    } else {
        $_SESSION['error'] = 'ไม่มีข้อมูลในระบบ';
            header('location: home.php');
    }

?>