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