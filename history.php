<?php
 session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="css/gui.css">
    <link rel="stylesheet" href="css/his.css">
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
    <div class="login-dark">
        <form method="post" action="history_db.php">
            <div class="form-group">
            <select type="text" name="class" class="form-select form-select-lg mb-3">
                <option value="1">ม.1</option>
                <option value="2">ม.2</option>
                <option value="3">ม.3</option>
                <option value="4">ม.4</option>
                <option value="5">ม.5</option>
                <option value="6">ม.6</option>
            </select>
            </div>
            <div class="form-group">
            <select type="text" name="room" class="form-select form-select-lg mb-3">
                <option value="1">ห้อง 1</option>
                <option value="2">ห้อง 2</option>
                <option value="3">ห้อง 3</option>
                <option value="4">ห้อง 4</option>
                <option value="5">ห้อง 5</option>
            </select>
            </div>
            <div class="form-group">
            <input type="date" class="form-control" name="date" placeholder="วัน/เดือน/ปี เช่น 01/01/2023">
            </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block" type="submit" name="search">Search</button>
            </div>
        </form>
    </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
</body>

</html>