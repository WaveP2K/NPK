<?php 
    session_start();
    include 'config/db.php';

    $date = $_SESSION['date'];

    if(!isset($_SESSION['id'])) {
      $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
      header('location: index.php');
  } 
    //class 1
    if($_SESSION['class_room'] == '1/1') {
        $sql = "SELECT * FROM history WHERE class = '1' AND room = '1' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '1/2') {
        $sql = "SELECT * FROM history WHERE class = '1' AND room = '2' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '1/3') {
        $sql = "SELECT * FROM history WHERE class = '1' AND room = '3' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '1/4') {
        $sql = "SELECT * FROM history WHERE class = '1' AND room = '4' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '1/5') {
        $sql = "SELECT * FROM history WHERE class = '1' AND room = '5' AND date='$date'";
        $result = $conn->query($sql);
    }
    //class 2
    if($_SESSION['class_room'] == '2/1') {
        $sql = "SELECT * FROM history WHERE class = '2' AND room = '1' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '2/2') {
        $sql = "SELECT * FROM history WHERE class = '2' AND room = '2' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '2/3') {
        $sql = "SELECT * FROM history WHERE class = '2' AND room = '3' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '2/4') {
        $sql = "SELECT * FROM history WHERE class = '2' AND room = '4' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '2/5') {
        $sql = "SELECT * FROM history WHERE class = '2' AND room = '5' AND date='$date'";
        $result = $conn->query($sql);
    }
    //class 3
    if($_SESSION['class_room'] == '3/1') {
        $sql = "SELECT * FROM history WHERE class = '3' AND room = '1' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '3/2') {
        $sql = "SELECT * FROM history WHERE class = '3' AND room = '2' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '3/3') {
        $sql = "SELECT * FROM history WHERE class = '3' AND room = '3' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '3/4') {
        $sql = "SELECT * FROM history WHERE class = '3' AND room = '4' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '3/5') {
        $sql = "SELECT * FROM history WHERE class = '3' AND room = '5' AND date='$date'";
        $result = $conn->query($sql);
    }
    //class 4
    if($_SESSION['class_room'] == '4/1') {
        $sql = "SELECT * FROM history WHERE class = '4' AND room = '1' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '4/2') {
        $sql = "SELECT * FROM history WHERE class = '4' AND room = '2' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '4/3') {
        $sql = "SELECT * FROM history WHERE class = '4' AND room = '3' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '4/4') {
        $sql = "SELECT * FROM history WHERE class = '4' AND room = '4' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '4/5') {
        $sql = "SELECT * FROM history WHERE class = '4' AND room = '5' AND date='$date'";
        $result = $conn->query($sql);
    }
    //class 5
    if($_SESSION['class_room'] == '5/1') {
        $sql = "SELECT * FROM history WHERE class = '5' AND room = '1' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '5/2') {
        $sql = "SELECT * FROM history WHERE class = '5' AND room = '2' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '5/3') {
        $sql = "SELECT * FROM history WHERE class = '5' AND room = '3' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '5/4') {
        $sql = "SELECT * FROM history WHERE class = '5' AND room = '4' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '5/5') {
        $sql = "SELECT * FROM history WHERE class = '5' AND room = '5' AND date='$date'";
        $result = $conn->query($sql);
    }
    //class 6
    if($_SESSION['class_room'] == '6/1') {
        $sql = "SELECT * FROM history WHERE class = '6' AND room = '1' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '6/2') {
        $sql = "SELECT * FROM history WHERE class = '6' AND room = '2' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '6/3') {
        $sql = "SELECT * FROM history WHERE class = '6' AND room = '3' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '6/4') {
        $sql = "SELECT * FROM history WHERE class = '6' AND room = '4' AND date='$date'";
        $result = $conn->query($sql);
    }
    if($_SESSION['class_room'] == '6/5') {
        $sql = "SELECT * FROM history WHERE class = '6' AND room = '5' AND date='$date'";
        $result = $conn->query($sql);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="css/gui.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/npk_gui.css">
    <link rel="stylesheet" href="css/npk_bg.css"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="area" >
        <ul class="circles">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
        <?php 
    include 'header.php';
    ?>
    <div class="container mt-5">
        <div class="card">
            <div class="card-body">
            <div class="container">
            <table class="table">
                <thead>
                    <tr>
                        <td width="10%">รหัสนักเรียน</td>
                        <td width="10%">ชื่อ</td>
                        <td width="10%">นามสกุล</td>
                        <td width="10%">ชั้น</td>
                        <td width="10%">ห้อง</td>
                        <td width="10%">เช็คชื่อ</td>
                        <td width="10%">เวลา</td>
                    </tr>
                </thead>
                <tbody>
                <?php while($row = $result->fetch_assoc()): ?>
                    <tr>
                    <td><?php echo $row['id']; ?></td>
                    <td class="name">
                        <?php echo $row['name']; ?>
                    </td>
                    <td><?php echo $row['lastname']; ?>
                    </td>
                    <td><?php echo $row['class']; ?>
                    </td>
                    <td><?php echo $row['room']; ?>
                    </td>
                    <td><?php echo $row['status']; ?>
                    </td>
                    <td><?php echo $row['time']; ?>
                    </td>
                    </tr>
                <?php endwhile ?>
            </tbody>
        </table>
            </div>
        </div>
    </div>
</body>
</html>