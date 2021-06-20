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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="<?= base_url('assets/img/logo.png'); ?>" width="40" height="40" class="d-inline-block align-top" alt="" loading="lazy">
    Surya Satrya Timur</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav ml-3">
      <a class="nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link" href="#">Features</a>
      <a class="nav-link" href="#">Pricing</a>
      <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </div>
  </div>
  <div class="mr-auto">
    <div class="d-inline-block mr-2">
      <?= date("l, d F Y"); ?>
    </div>
  <div class="dropdown d-inline-block">
  <button class="btn btn-success dropdown-toggle p-3 mr-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <i class="bi bi-person-circle"></i> <?= $username; ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Logout</a>
    <a class="dropdown-item" href="#">Status Pengiriman</a>
  </div>
</div>
  </div>
</nav>