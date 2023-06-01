<?php 
    session_start();
    include 'config/db.php';

    if(!isset($_SESSION['id'])) {
      $_SESSION['error'] = 'กรุณาเข้าสู่ระบบ';
      header('location: index.php');
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
    <style>
      .clock-ct {
      font-size: 30px;
      text-align: center;
      margin-top: 10px;
      color: #fff;
      }
    </style>
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
    <div class="crad-body mt-alert">
      <?php 
 if(isset($_SESSION['error'])) { ?> <div class="container alert alert-danger"> <?php
  echo $_SESSION['error'];
  unset($_SESSION['error']);
} ?> </div>
  <div class="crad-body mt-alert">
<?php 
 if(isset($_SESSION['success'])) { ?> <div class="container alert alert-success"> <?php
  echo $_SESSION['success'];
  unset($_SESSION['success']);
  } ?> </div>
  </div>
      <div class="login-box">
        <h2>Check</h2>
        <form method="post" action="check_db.php">
    <div class="">
      <select type="text" name="check" class="form-select form-select-lg mb-3">
          <option value="มาเรียน">มาเรียน</option>
          <option value="ลา">ลา</option>
        </select>
        
    </div>
    <div class="clock-ct text-center" id="clock"></div>
    <div class="d-grid gap-2 col-6 mx-auto">
      <button type="submit" name="submit" class="btn">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        Submit
      </button>
    </div>
  </form>
</div>
<script>
  // Display current time
    function displayTime() {
        var now = new Date();
        var time = now.toLocaleTimeString();
        document.getElementById('clock').textContent = time;
        setTimeout(displayTime, 1000); // Update every second
    }
    displayTime();
</script>
</body>
</html>