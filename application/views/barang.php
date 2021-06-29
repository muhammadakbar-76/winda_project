<div class="row">
<!-- navbar yang ada di kiri -->
<div class="col-sm-2 border border-secondary p-0 ml-3">
<aside class="kiri-barang">
<div class="kotak-hijau"></div>
<a href="#"><div class="nav-barang text-center p-3 border-bottom border-secondary">Barang</div></a>
<a href="#"><div class="nav-barang text-center p-3 border-bottom border-secondary">Status Transaksi</div></a>
</aside>
</div>
<!-- akhir navbar -->
<!-- isi konten -->
<div class="col-sm-9 p-0 ml-1">
<div class="judul-barang border border-secondary d-flex justify-content-center align-items-center">Persediaan Barang</div>
<div class="row">
    <div class="col-sm-8">
    <p class="mt-3">Data Barang</p><hr style="width: 100%;">
    <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama Barang</th>
      <th scope="col">Tanggal</th>
      <th scope="col">Harga</th>
      <th scope="col">Stok</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class='barang'>
    <?php $n=1; foreach ($barang as $a) { ?>
      <tr>
      <th scope="row"><?= $n++; ?></th>
      <td><?= $a['kd_barang']; ?></td>
      <td><?= $a['nama']; ?></td>
      <td><?= $a['last_update']; ?></td>
      <td>Rp. <?= number_format($a['harga'],0,',','.'); ?></td>
      <td><?= $a['stok']; ?></td>
      <td class="text-center">
      <!-- Button trigger modal -->
<button type="button" name="a" class="btn btn-success add" data-toggle="modal" data-target="#exampleModal" value="<?= $a['kd_barang'].'&'.$a['nama'].'&'.$a['harga']; ?>">
  Add
</button>
      </td>
    </tr>
    <?php } ?>
  </tbody>
</table>
    </div>
    <div class="col-sm-4 pl-0">
    <p class="mt-3">Keranjang Pemesanan</p><hr style="width: 100%;">
    <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode</th>
      <th scope="col">Harga</th>
      <th scope="col">Jumlah</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody class="keranjang">
    <tr class="keranjang">
      <th scope="row">1</th>
      <td></td>
      <td></td>
      <td></td>
      <td><button class="btn btn-danger d-none">Del</button></td>
    </tr>
  </tbody>
</table>
<span>Harga x Jumlah</span><span class="mr-auto d-inline-block hxj" style="float: right;">Rp.xxx</span>
<hr class="mt-5" style="width: 100%;">
<span>Total Bayar</span><span class="mr-auto d-inline-block total" style="float: right;">Rp.xxx</span>
<br>
<form action="<?= base_url('barang/pesan')?>" method="post" class="pemesanan">
<input type="hidden" name="id_user" value="<?=$username->id_user?>">
<input type="hidden" name="kd_barang">
<input type="hidden" name="harga_total">
<input type="hidden" name="total_brg">
<input type="hidden" name="status" value="await">
</form>
<button type="button" class="btn btn-success mt-5 simpan-transaksi" style="float: right">Simpan transaksi</button>
    </div>
</div>
</div>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pemesanan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success tambahkan" data-dismiss="modal">Tambahkan</button>
      </div>
    </div>
  </div>
</div>
