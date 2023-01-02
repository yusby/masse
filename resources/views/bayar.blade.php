@extends('layout.mainlayout')
@section('title','Bayar')

@section('content')
<div class=" text-center">
    <br>
    <h1>Riwayat Pembayaran<h1>
    </div>
@foreach($bayar as $b)
<style>
 .cont{
    width: 800px;
    height: 300px;
 }
</style>
<div class="container cont">    
    <div class="mb-1">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <label type="text" class="form-control" name="username">{{$b->username}}<label>
        </div> 
    <div class="mb-1">
        <label for="exampleInputEmail1" class="form-label">Nomer Tagihan</label>
        <label type="text" class="form-control" name="nomertagihan">{{$b->nomertagihan}}<label>
        </div> 
    <div class="mb-1">
        <label for="exampleInputEmail1" class="form-label">Waktu Bayar</label>
        <label type="text" class="form-control" name="created_at">{{$b->created_at}}<label>
        </div> 
    </div>
@endforeach

@endsection