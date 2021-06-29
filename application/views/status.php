<div class="row mt-5 justify-content-center">
<div class="col-sm-5 text-center">
<?php if (!$status) { ?>
    <div class="row justify-content-center align-items-center" style="height: 370px;">
        <h3 class="text-muted">Pesanan Anda Kosong!</h3>
    </div>
<?php } elseif($status['status'] == 'pay') { ?>
    <h3>Silahkan Lakukan Pembayaran!</h3>
    <img src="<?= base_url('assets/img/pay.gif') ?>" alt="" class="rounded-circle gif mt-4">
    <p class="mt-4 text-muted">Harap lakukan pembayaran pesanan anda, lakukan pembayaran pesanan hanya pada 
        No.Rekening Bank yang sudah diberikan. <i>Terima Kasih</i>
    </p>
<?php } elseif($status['status'] == 'deliver') { ?>
    <h3>Pesanan Anda Sedang Dalam Pengiriman!</h3>
    <img src="<?= base_url('assets/img/deliver.gif') ?>" alt="" class="rounded-circle gif mt-4">
    <p class="mt-4 text-muted">Pesanan anda dalam pengiriman, pastikan no hp anda aktif agar kurir Kami
        bisa menghubungi anda. <i>Terima Kasih</i>
    </p>
<?php } elseif($status['status'] == 'confirm') { ?>
    <h3>Silahkan Konfirmasi Jika Pesanan Sudah Anda Terima!</h3>
    <img src="<?= base_url('assets/img/confirm.gif') ?>" alt="" class="rounded-circle gif mt-4">
    <p class="mt-4 text-muted">Harap konfirmasi pesanan anda telah anda terima, jika ada yang ingin anda tanyakan,
        silahkan hubungi kami. <i>Terima Kasih</i>
    </p>
<?php } elseif($status['status'] == 'delayed') { ?>
    <h3>Pesanan Anda di Tunda!</h3>
    <img src="<?= base_url('assets/img/refuse.gif') ?>" alt="" class="rounded-circle gif mt-4">
    <p class="mt-4 text-muted">Pesanan anda ditunda, hal ini disebabkan karena stok habis atau hal lainnya, anda bisa menunggu atau membatalkan pesanan anda di menu riwayat transaksi. <i>Terima Kasih</i>
    </p>
<?php } elseif ($status['status'] == 'await') { ?>
    <h3>Pesanan Anda Sedang Kami Proses!</h3>
    <img src="<?= base_url('assets/img/await.gif') ?>" alt="" class="rounded-circle gif mt-4">
    <p class="mt-4 text-muted">Harap tunggu konfirmasi pesanan anda, pesanan anda bisa saja ditunda karena
        stok sudah habis atau hal lainnya. <i>Terima Kasih</i>
    </p>
<?php } ?>
</div>
</div>