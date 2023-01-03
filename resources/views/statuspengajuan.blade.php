@extends('layout.mainlayout')
@section('title','Status Pengajuan')

@section('content')
<div class=" text-center">
    <br>
    <h1>Status Pengajuan<h1>
    </div>
@foreach($pengajuan as $p)
<style>
 .cont{
    width: 800px;
    height: 300px;
 }
</style>
        <div class="row">
        <div class="col-4 mb-5 d-flex justify-content-center">
            <div class="card" style="width:18rem;">
                <div class="card-body">
                <h5 class="card-status">{{$p->nama}}</h5>
                <h6 class="card-conten">{{$p->faskes}}</h6>
                <h6 class="card-harga">{{$p->nominal}}</h6>
                </div>
            <a href="" class="btn btn-success">Lunas</a>    
            </div></div></div>
@endforeach

@endsection