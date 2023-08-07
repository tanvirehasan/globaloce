<?php include "config/functions.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Global Center of Excellence</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="stylesheet" href="assets/owlcarousel/owl.carousel.min.css">
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <script src="assets/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css">
</head>

<body>
  <nav class="navbar  sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">
        <img src="upload/basic/logo.PNG" alt="" width="250">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup">
        <div class="navbar-nav ">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Home</a></li>
            <li class="nav-item"><a class="nav-link" href="about_us.php">About Us</a></li>
            <li class="nav-item"><a class="nav-link" href="#Programs">Programs</a></li>
            <li class="nav-item"><a class="nav-link" href="#news_events">Blog & Events</a></li>
            <li class="nav-item"><a class="nav-link" href="contuct_us.php">Contact us</a></li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="upload/basic/bd.png" alt="" width="35">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <?php
                $data = SelectData('cuntry', "");
                while ($row = $data->fetch_object()) { ?>
                  <li><a class="dropdown-item" href="#"> <img src="upload/basic/<?= $row->flg ?>" alt="" width="35" class="pe-2"> <?= $row->code ?></a></li>
                <?php } ?>
              </ul>
            </li>



          </ul>
        </div>
      </div>
    </div>
  </nav>