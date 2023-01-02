@extends('layout.mainlayout')
@section('title','IURAN')


@section('content')

@foreach($iuran as $i)
<style>
 .cont{
    width: 800px;
    height: 800px;
 }
</style>
<div class="container cont">
   <div class=" text-center">
    <br>
    <h1>Tagihan Iuran<h1>
    </div>    
        
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nomer Tagihan</label>
        <label type="text" class="form-control" id="nomertagihan">{{$i -> notagihan}}<label>
        
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Jumlah Tagihan</label>
        <label type="text" class="form-control" id="nomertagihan">{{$i -> jumlahtagihan}}<label>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Tanggal Tagihan</label>
        <label type="text" class="form-control" id="nomertagihan">{{$i -> tanggaltagihan}}<label>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Virtual Akun</label>
        <label type="text" class="form-control" id="nomertagihan">{{$i -> virtualakun}}<label>
    </div>
    <div class=" text-center">
    <br>
    </form>
    <h5>Mohon Melakukan Pembayaran Tepat Waktu<h5>
    <a class="download btn btn-primary" href="/bayar/create">Kirim Bukti Pembayaran</a>
    </div>
</div>

<tr>
    <td>{{$i -> notagihan}}</td>
</tr>

@endforeach

@endsection

