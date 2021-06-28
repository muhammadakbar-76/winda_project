<div class="row justify-content-center">
<div class="col-sm-5">
<?php print_r($status); ?>
<?php if ($status['status'] == 'await') { ?>
<h4>Pesanan anda sedang di proses!</h4>
<?php } else { ?>
<h4>error</h4>
<?php } ?>
</div>
</div>