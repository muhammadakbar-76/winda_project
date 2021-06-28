<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
    <title><?= $judul; ?></title>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-12">
<header>
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="<?=base_url()?>assets/img/background.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h1>Selamat Datang di<br>PT. Surya Satrya Timur</h1>
      </div>
    </div>
    <div class="carousel-item">
      <img src="<?=base_url()?>assets/img/p1.jpg" class="d-block" alt="...">
      <div class="carousel-caption d-none d-md-block">
       <h1>Ini merupakan aplikasi web untuk pembelian limbah kayu</h1>
      </div>
    </div>
  </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark">
  <a class="navbar-brand" href="#"><img src="<?= base_url();?>assets/img/logo.png" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-auto">
      <a class="nav-link active mr-4" href="<?= base_url() ?>"><h5>Home</h5><span class="sr-only">(current)</span></a>
      <a class="nav-link mr-4" href="<?= base_url("barang") ?>"><h5>Pemesanan</h5></a>
      <a class="nav-link mr-4" href="<?= base_url("status") ?>"><h5>Status</h5></a>
      <?php if (!isset($_SESSION['user_logged'])) { ?>
      <a class="nav-link mr-4" href="<?= base_url('login') ?>"><h5>Login</h5></a>
      <?php } else { ?>
        <a class="nav-link mr-4" href="<?= base_url('login/logout') ?>"><h5>Logout</h5></a>
      <?php } ?>
    </div>
  </div>
</nav>
</header>
</div></div>
