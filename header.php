<?php 
include 'config/db.php';
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">NPK</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#"></a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">เช็คชื่อ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="history.php">ดูประวัติ</a>
        </li>
      </ul>
      <form class="d-flex">
        <?php 
            if ($_SESSION['id']) { ?> <h5 class="container mt-2"> <?php
                echo $_SESSION['name']."   ".$_SESSION['lastname'];
            }
        ?></h5>
        <a href="logout.php" class="btn btn-outline-danger">Logout</a>
      </form>
    </div>
  </div>
</nav>