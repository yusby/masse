<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MASSE | @yield('title')</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <img src="asset/logo-masse.png" class="rounded mx-3" style="width: 85px" alt="Logo">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="/">Home</a>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/iuran">Iuran</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/bayar">Riwayat Pembayaran</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/pengajuan">Pengajuan</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" aria-current="page" href="/statuspengajuan">Status Pengajuan</a>
            </li>
        </ul>

        @auth
        <div class="btn btn-primary me-2"><p>Hai Sehat <b>{{ Auth::user()->name }}</b></p></div>
        
        <a class="btn btn-danger me-2" href="{{ route('logout') }}">Logout</a>
        @endauth
        @guest
        <a class="btn btn-danger me-2" href="{{ route('login') }}">Login</a>
        <a class="btn btn-info me-2" href="{{ route('register') }}">Register</a>
        @endguest
        
        

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        </div>
    </div>
    </nav>
    
    <style type="text/css">
                body {
                    margin: 0;
                    background-image: url("asset/background.gif");
                    background-repeat: no-repeat;
                    background-attachment: fixed;
                    background-size: cover;
                }
                
    </style>
    

    @yield ('content')
    
        <footer class="text-center text-lg-start bg-primary navbar-dark text-white">
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
       
        <div class="me-5 d-none d-lg-block">
        <span>Kenali dan hubungi kami lebih jauh:</span>
        </div>
    </section>
    
    <section class="">
        <div class="container text-center text-md-start mt-5">
        
        <div class="row mt-3">
          
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          
            <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3"></i>Masse
            </h6>
            <p>
                Membantu Mahasiswa Mendapatkan Bantuan Biaya Kesehatan Dengan Asas Tolong Menolong dan Kebersamaan
            </p>
            </div>
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                Products
            </h6>
            <p>
                <a href="#!" class="text-reset">Iuran</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Pengajuan</a>
            </p>
           
            </div>
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
            <h6 class="text-uppercase fw-bold mb-4">
                Our Tim
            </h6>
            <p>
                <a href="#!" class="text-reset">Yusuf Bachtiar</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Alief Ikhsan</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Adinda Maulida</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Memei Sri Mulyani</a>
            </p>
            <p>
                <a href="#!" class="text-reset">Andi Salwa Diva</a>
            </p>
            </div>
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
            <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
            <p><i class="fas fa-home me-3"></i> UPI Purwakarta</p>
            <p>
                <i class="fas fa-envelope me-3"></i>
                masse@gmail.com
            </p>
            <p><i class="fas fa-phone me-3"></i> 081223808334</p>
            <p><i class="fas fa-print me-3"></i> 081234567890</p>
            </div>
        </div>
        </div>
    </section>
    <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
        © 2021 Copyright:
        <a class="text-reset fw-bold" href="">Masse</a>
    </div>
    </footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>