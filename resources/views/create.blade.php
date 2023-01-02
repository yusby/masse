@extends('layout.mainlayout')
@section('title','Buktibayar')

@section('content')

    <style>
    .cont{
        width: 800px;
        height: 800px;
    }
    </style>

    <div class="container cont">
    <div class=" text-center">
        <br>
        <h2>Kirim Bukti Pembayaran<h1>
        </div>       
        <form action="bayar/store" method="POST">
        @csrf
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="username" placeholder="username">
                </div> 
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Nomer Tagihan</label>
                <input type="text" class="form-control" name="nomertagihan" placeholder="nomer tagihan">
                </div>             
            <div class="mb-3">
                <label for="formFile" class="form-label"></label>
                <input class="form-control" type="file" name="buktipembayaran">
                </div>
            <input type="submit" name="submit" class="btn btn-primary">
        </form>
    </div>

@endsection