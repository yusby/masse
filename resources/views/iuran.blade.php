@extends('layout.mainlayout')
@section('title','IURAN')

@section('content')
<br><br>
<style>
 .cont{
    width: 400px;
    height: 800px;
 }
</style>

<div class="container cont">
   <div class=" text-center border border-dark border-3 ">
    <h1>Kas Tagihan<h1>
    <br>    
    <img src="asset/barcode1.gif" class="rounded mx-3" style="width: 150px" alt="Logo">
    <br>
    <br>
    <p class="fs-6">This is your QR Code for Payment</p>
    <p class="fs-6">Total Bayar {10.000}</p>
    <p class="fs-6">Upload Bukti Pembayaran</p>

    <div class="mb-3">
        <label for="formFile" class="form-label"></label>
        <input class="form-control" type="file" id="formFile">
    </div>
    <a class="fs-6" href="/riwayat"><p>Selesai</p></a>

</div>
    </div>
</div>

@endsection

