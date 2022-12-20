@extends('layout.mainlayout')
@section('title','PROFILE')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    <div class="container mt-5">
    <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="asset/4.jpg" class= "rounded-circle" class="img-fluid" width= "250" alt="foto profile">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>Andi Salwa Diva</h3>
            <p class="fst-italic">
             @wawa
            </p>
            <div class="row">
              <div class="col-md-6">
                  <i class="bi bi-chevron-right"></i> <strong>Alamat:</strong> <span>Bekasi</span>
                  <br>
                  <i class="bi bi-chevron-right"></i> <strong>No.Telp:</strong> <span>08123456789</span>
                  <br>
                  <i class="bi bi-chevron-right"></i> <strong>Kampus:</strong> <span>Universitas Pendidikan Indonesia</span>
                  <br>
                  <i class="bi bi-chevron-right"></i> <strong>Fakultas:</strong> <span>Kampus Daerah Purwakarta</span>
                  <br>
                  <i class="bi bi-chevron-right"></i> <strong>Jurusan:</strong> <span>Pendidikan Sistem dan Teknologi Informasi</span>
              </div>
              <div class="col-md-6">
                  <i class="bi bi-chevron-right"></i> <strong>No.Rekening:</strong> <span>123456789</span>
                  <br>
                  <i class="bi bi-chevron-right"></i> <strong>Nama Bank:</strong> <span>BNI</span>
                  <br>
                  <i class="bi bi-chevron-right"></i> <strong>No.Kartu Tanda Mahasiswa:</strong> <span>0019201298</span>
              </div>
            </div>
            <br>
            <br>
            <a class="btn btn-primary">Edit Profile</a>
        </div>
    </div>
</body>
</html>
<br>
<br>
@endsection