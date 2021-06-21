
<div class="row">
<!-- navbar yang ada di kiri -->
<div class="col-sm-2 border border-secondary p-0 ml-3">
<aside class="kiri-barang">
<div class="kotak-hijau"></div>
<a href="#"><div class="nav-barang text-center p-3 border-bottom border-secondary">Barang</div></a>
<a href="#"><div class="nav-barang text-center p-3 border-bottom border-secondary">Riwayat Transaksi</div></a>
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
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td class="text-center">
      <!-- Button trigger modal -->
<button type="button" class="btn btn-success" data-toggle="modal" data-target="#exampleModal">
  Add
</button>
      </td>
    </tr>
  </tbody>
</table>
    </div>
    <div class="col-sm-4 pl-0">
    <p class="mt-3">Keranjang Penjualan</p><hr style="width: 100%;">
    <table class="table table-bordered">
  <thead class="thead-light">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Kode</th>
      <th scope="col">Nama</th>
      <th scope="col">Harga</th>
      <th scope="col">Total</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
    </tr>
  </tbody>
</table>
<span>Harga</span><span class="mr-auto d-inline-block" style="float: right;">Rp.xxx</span>
<hr style="width: 100%;">
<span>Total Bayar</span><span class="mr-auto d-inline-block" style="float: right;">Rp.xxx</span>
<br>
<button type="button" class="btn btn-success mt-5" style="float: right">Simpan transaksi</button>
    </div>
</div>
</div>

</div>



<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        "Sekuat-kuatnya aku bertarung, kalo liat orang pake pp mickey, harus lari"<br><br><br><br>
        <footer class="blockquote-footer" style="background-color: unset">Programmer gabut nan <cite title="Source Title">Jomblo</cite></footer>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-success">Tambahkan</button>
      </div>
    </div>
  </div>
</div>
