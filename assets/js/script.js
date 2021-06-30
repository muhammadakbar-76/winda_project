let valPesan = '',
m = '',
n = 1,
totalHarga1 = '',
totalHarga2 = '',
harga1 = '',
harga2 = '',
    n1 = '',
    n2 = '',
    total = '';

// Create our number formatter.
var formatter = new Intl.NumberFormat('id-ID', {
  style: 'currency',
  currency: 'IDR',

  // These options are needed to round to whole numbers if that's what you want.
  //minimumFractionDigits: 0, // (this suffices for whole numbers, but will print 2500.10 as $2,500.1)
  maximumFractionDigits: 0 // (causes 2500.99 to be printed as $2,501)
});

function keranjang(krj,row,btn,add) {
  total += valPesan[2] * n;
  if (krj == 'satu') {
    harga1 = valPesan[2];
    n1 = n;
    totalHarga1 = valPesan[2] * n;
  }
  else {
    harga2 = valPesan[2];
    n2 = n;
    totalHarga2 = valPesan[2] * n;
  }
  $('tbody.keranjang').append(`
      <tr class="keranjang ${krj}">
      <th scope="row">${row}</th>
      <td>${valPesan[0]}</td>
      <td>${formatter.format(valPesan[2])}</td>
      <td>${n}</td>
      <td><button class="btn btn-danger ${btn}">Del</button></td>
      </tr>`);
      $(`tbody.barang tr:nth-child(${add}) button`).prop('disabled','true');
      if ($('span.hxj').text() == 'Rp.xxx') {
        $('span.hxj').html(`${formatter.format(valPesan[2])} x ${n}`);  
      }
      else {
        $('span.hxj').after(`<br class="krj"><span class="mr-auto d-inline-block" style="float: right;">${formatter.format(valPesan[2])} x ${n}</span>`);
      }
      $('span.total').html(`${formatter.format(total)}`);
}

function formPemesanan(v1,v2) {
  $('form.pemesanan input:nth-child(2)').val(v1);
  $('form.pemesanan input:nth-child(3)').val(total);
  $('form.pemesanan input:nth-child(4)').val(v2);
}

$('button.about').on('click', function(){
    $('.my-auto').hide('slow', function(){
        $('.my-auto').remove();
        $('.aside').after(`<div class="col-sm-10 text-center"><h2 class="judul">Tentang Kami</h2><hr>
        <div class="row justify-content-center">
        <div class="col-sm-10 pAtas"><p>Perusahaan PT. Surya Satrya Timur merupakan pabrik pengolahan kayu yang didirikan pada tahun 1976. Pabrik pengolahan ini terletak di Jln. Ir. PHM. Noor No. 99 (tepi Sungai Barito), Desa Kuin Cerucuk, Kecamatan Banjarmasin Barat, Kota Banjarmasin, Kalimantan Selatan, dan memiliki cabang kantor di jakarta yang berlokasi di Jl. Teluk Betung No. 45 E, Jakarta 10230, Indonesia.<br><br>
        PT. Surya Satrya Timur merupakan salah satu dari perusahaan di Indonesia yang memproduksi dan memasarkan berbagai jenis produk olahan kayu berkualitas tinggi. Beberapa jenis produk kami adalah General Plywood, Concrete Panel, Floorebase, Veneer, Blockboard, Barecore, Sawntimber, Polyester Plywood dan Polyester Blockboard. Saat ini kami merupakan salah satu pemain global di dunia dan telah mengekspor produk kami ke Jepang, Korea, Taiwan, India, Eropa dan USA. Seiring dengan perkembangan jaman saat ini, perusahaan pembuat kayu lapis dituntut untuk menghasilkan produk yang berstandar tinggi untuk dapat bersaing di pasar internasional. Tuntutan pembuatan produk yang bermutu ini dapat menimbulkan permasalahan baru yaitu masalah mengenai limbah.
        </p></div>
        </div></div>`);
        setTimeout(function(){
            $('div.content h2.judul').removeClass('judul');
            $('div.content h2,hr').addClass('muncul');
        },800);
        setTimeout(function(){
            $('.pAtas').addClass('pMuncul');
        },1000);
    })
   
});

if ($(document).attr('title') == 'Selamat Datang') {
    $('a.nav-link').removeClass('active');
    $('a.nav-link:nth-child(1)').addClass('active');
  }
else if ($(document).attr('title') == 'Pesan Barang') {
    $('body').css('min-height', '110vh');
    $('body').css('background-color', 'white');
    $('a.nav-link').removeClass('active');
    $('a.nav-link:nth-child(2)').addClass('active');
  }
  else if ($(document).attr('title') == 'Status Pemesanan') {
    $('body').css('background-color', 'white');
    $('a.nav-link').removeClass('active');
    $('a.nav-link:nth-child(3)').addClass('active');
  }
  else {
    $('body').css('background-color', 'white');
    $('a.nav-link').removeClass('active');
  }

$('button.add').on('click', function(){
    let value = this.value;
    let val = value.split('&');
        valPesan = val;
        n=1;
        $('div.modal-body').html(`<table class="table">
        <tbody>
          <tr>
            <th scope="row">Kode Barang :</th>
            <td>${val[0]}</td>
          </tr>
          <tr>
            <th scope="row">Nama Barang :</th>
            <td>${val[1]}</td>
          </tr>
          <tr>
            <th scope="row">Harga      :</th>
            <td class="harga">${formatter.format(val[2])}</td>
          </tr>
        </tbody>
      </table>
      <div class="d-flex justify-content-end">
      <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-secondary tambah">+</button>
  <button type="button" class="btn isi">1</button>
  <button type="button" class="btn btn-secondary kurang">-</button>
</div>
</div>`);

    });

      $(document).on('click','button.tambah,button.kurang', function() {
        if ($(this).hasClass('tambah')) {
         n++;
        }
        else {
          if (n != 1) {
          n--;
          }
        }
        $('button.isi').html(n);
      });

  $('button.tambahkan').on('click', function(){
    
    if ($('tr.keranjang td:nth-child(2)').text() != 0) {
      if (valPesan[0] == 'B-001') {
      keranjang('satu','2','siji','1');
      }
      else {
        keranjang('dua','2','loro','2');
      }
    }
    else if ($('tbody.keranjang').html() == 0) {
      if (valPesan[0] == 'B-001') {
        keranjang('satu','1','siji','1');
    }
    else {
      keranjang('dua','1','loro','2');
    }
    }
    else {
      total = valPesan[2]*n;
      if (valPesan[0] == 'B-001') {
        harga1 = valPesan[2];
        n1 = n;
        m = 1;
        totalHarga1 = valPesan[2]*n;
        $('tr.keranjang').addClass('satu');
        $('button.btn-danger').addClass('siji');
      }
      else {
        harga2 = valPesan[2];
        n2 = n;
        m = 2;
        totalHarga2 = valPesan[2]*n;
        $('tr.keranjang').addClass('dua');
        $('button.btn-danger').addClass('loro');
      }
      $('tr.keranjang td:nth-child(2)').html(valPesan[0]);
      $('tr.keranjang td:nth-child(3)').html(formatter.format(valPesan[2]));
      $('tr.keranjang td:nth-child(4)').html(n);
      $('button.btn-danger').removeClass('d-none');
      $(`tbody.barang tr:nth-child(${m}) button`).prop('disabled','true');
      $('span.hxj').html(`${formatter.format(valPesan[2])} x ${n}`);
      $('span.total').html(`${formatter.format(total)}`);
    }
  });

  $(document).on('click','button.btn-danger',function(){
    if ($(this).hasClass('siji')) {
      if ($('button.loro').length) {
        console.log('ya, loro exist');
        total -= totalHarga1;
        console.log(totalHarga1);
        $('tr.keranjang.satu').remove();
        $('span.hxj').next().next().remove();
        $('br.krj').remove();
        $('span.hxj').html(`${formatter.format(harga2)} x ${n2}`);
        $('span.total').html(`${formatter.format(total)}`);
        $('tbody.barang tr:nth-child(1) button').removeAttr('disabled');
      }
      else {
        console.log('loro gak ada');
        total = 0;
        $('tr.keranjang.satu').remove();
        $('span.hxj').html('Rp.xxx');
        $('span.total').html('Rp.xxx');
        $('tbody.barang tr:nth-child(1) button').removeAttr('disabled');
      }
    }
    else {
      console.log('lu nekan loro');
      if ($('button.siji').length) {
        console.log('ya, siji exist');
        total -= totalHarga2;
        console.log(totalHarga2);
        $('tr.keranjang.dua').remove();
        $('span.hxj').next().next().remove();
        $('br.krj').remove();
        $('span.hxj').html(`${formatter.format(harga1)} x ${n1}`);
        $('span.total').html(`${formatter.format(total)}`);
        $('tbody.barang tr:nth-child(2) button').removeAttr('disabled');
      }
      else {
        console.log('siji gak ada');
        total = 0;
        $('tr.keranjang.dua').remove();
        $('span.hxj').html('Rp.xxx');
        $('span.total').html('Rp.xxx');
        $('tbody.barang tr:nth-child(2) button').removeAttr('disabled');
      }
    }
  });

  $('button.simpan-transaksi').on('click', function(){
    if ($('tr.keranjang td:nth-child(2)').text() != 0) {
      if ($('tbody tr:nth-child(2)').length) {
        formPemesanan('B-001,B-002',`${n1},${n2}`);
      }
      else {
        if ($('tr.keranjang td:nth-child(2)').text() == 'B-001') {
          formPemesanan('B-001',`${n1}`);
        }
        else {
          formPemesanan('B-002',`${n2}`);
        }
      }
      swal({
        title: "Lakukan Pemesanan?",
        text: "Cek kembali jumlah barang yang anda pesan!",
        icon: "warning",
        buttons: true,
        dangerMode: true,
      })
      .then((mesan) => {
        if (mesan) {
          setTimeout(() => {
            $('form').submit();  
          }, 1000);
          swal("Pemesanan Berhasil", {
            icon: "success",
            buttons: false
          });
        } else {
          swal("Anda Membatalkan Pemesanan!");
        }
      });
    }
    else {
      swal("Data empty!", "There is no data", "error");
    }
  });