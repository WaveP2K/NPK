<?php 
    session_start();
    include 'config/db.php';

    if (isset($_POST['login'])) {
        $id = $_POST['id'];

        if(empty($id)) {
            $_SESSION['error'] = 'กรุณากรอกชื่อผู้ใช้';
            header('location: index.php');
        } else {
            $check_user = "SELECT * FROM studen WHERE id = '$id'";
            $query = mysqli_query($conn, $check_user);
            $result = mysqli_fetch_assoc($query);

            if (mysqli_num_rows($query) == 1) {
                $_SESSION["id"] = $result["id"];
                $_SESSION["name"] = $result["name"];
                $_SESSION["lastname"] = $result["lastname"];
                $_SESSION["class"] = $result["class"];
                $_SESSION["room"] = $result["room"];
                
                $_SESSION['popup'] = '<script>alert("เข้าสู่ระบบสำเร็จ")</script>';
                header('location: home.php');
            } else {
                $_SESSION['error'] = 'ไม่มีข้อมูลในระบบ';
                    header('location: index.php');
            }
        }
    }

?>