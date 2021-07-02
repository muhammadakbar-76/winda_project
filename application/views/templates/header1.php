<?php 

$a = $_SERVER['PHP_SELF'];

$hari = array ( 1 =>    'Senin',
			'Selasa',
			'Rabu',
			'Kamis',
			'Jumat',
			'Sabtu',
			'Minggu'
		);

function tanggal_indo($tanggal)
{
	$bulan = array (1 =>   'Januari',
				'Februari',
				'Maret',
				'April',
				'Mei',
				'Juni',
				'Juli',
				'Agustus',
				'September',
				'Oktober',
				'November',
				'Desember'
			);
	$split = explode('-', $tanggal);
	return $split[2] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[0];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?= base_url();?>assets/css/style.css">
    <?php if (strpos($a, 'admin') !== false) { ?>
    <link rel="stylesheet" href="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.css">
    <script src="//cdn.jsdelivr.net/chartist.js/latest/chartist.min.js"></script>
    <?php } ?>
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
      <a class="nav-link" href="<?= base_url() ?>">Home</a>
      <a class="nav-link" href="<?= base_url('barang') ?>">Pemesanan</a>
      <a class="nav-link" href="<?= base_url("status") ?>">Status</a>
      <?php if (strpos($a, 'admin') !== false) { ?>
      <a class="nav-link" href="<?= base_url('adminlogin/logout') ?>" tabindex="-1" aria-disabled="true">Logout</a>
      <?php } else { ?>
        <a class="nav-link" href="<?= base_url('login/logout') ?>" tabindex="-1" aria-disabled="true">Logout</a>
      <?php } ?>
    </div>
  </div>
  <div class="mr-auto">
    <div class="d-inline-block mr-2">
      <?= $hari[date('N')]; ?>, <?= tanggal_indo(date('Y-m-d')); ?>
    </div>
  <div class="dropdown d-inline-block">
  <?php if (strpos($a, 'admin') !== false) { ?>
    <button class="btn btn-primary dropdown-toggle p-3 mr-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php } else { ?>
        <button class="btn btn-success dropdown-toggle p-3 mr-3" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      <?php } ?>
  <i class="bi bi-person-circle"></i> <?= $username->username; ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item text-center" href="<?= base_url('login/logout') ?>">Logout</a>
    <a class="dropdown-item text-center" href="<?= base_url('login/logout') ?>">Riwayat Transaksi</a>
  </div>
</div>
  </div>
</nav>