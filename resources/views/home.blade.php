@extends('layout.mainlayout')
@section('title','HOME')

@section('content')
<!--style css-->
<link rel="stylesheet" href="style.css" />

<br>
<br>
<!--header home-->
<section class="jumbotron text-center">
  <h1 class="display-4">Selamat Datang Mahasiswa Sehat!!!</h1>
  <p class="lead">Ayo gotong royong bantu sesama karena kesehatan adalah hak milik semua!!</p>
</section>
<br>
<br>
<br>

<!--iklan-->
<section class="iklan">
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h2>Layanan</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img src="asset/1.jpg" class="card-img-top" alt="img1">
                    <div class="card-body">
                        <p class="card-text">Bantuan Layanan Tebus Obat</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="asset/2.jpg" class="card-img-top" alt="img2">
                    <div class="card-body">
                        <p class="card-text">Bantuan Pembayaran Fasilitas Kesehatan</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img src="asset/3.jpg" class="card-img-top" alt="img3">
                    <div class="card-body">
                        <p class="card-text">Dapat Diakses Dimana Saja dan Diperangkat Apa Saja</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<br>
<br>
<!--map-->
<div class="container">
    <div class="peta">
        <h3 class="text-secondary">Silahkan Cari Fasilitas Kesehatan Disekitar Anda</h3>
    </div>
    <br>
    <div class="mapouter mt-11">
        <div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=657&amp;height=270&amp;hl=en&amp;q=UPI purwakarta&amp;t=&amp;z=16&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://formatjson.org/word-counter">Word Counter</a>
        </div>
            <style>.mapouter{position:relative;text-align:right;width:100%;height:300px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:270px;}.gmap_iframe {height:270px!important;}</style>
    </div>
</div>



@endsection

