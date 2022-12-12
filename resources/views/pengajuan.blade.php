@extends('layout.mainlayout')
@section('title','PENGAJUAN')

@section('content')

<style>
 .cont{
    width: 800px;
    height: 800px;
 }
</style>
<div class="container cont">
   <div class=" text-center">
    <h1>Pengajuan Dana<h1>
    </div>    
        <form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Bank Tujuan</label>
            <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Bank</option>
            <option value="1">BNI</option>
            <option value="2">BRI</option>
            <option value="3">BCA</option>
            </select>
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nomer Rekening Tujuan</label>
        <input type="text" class="form-control" id="rekening" aria-describedby="rekeningHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Fasilitas Kesehatan Tujuan</label>
        <input type="text" class="form-control" id="rekening" aria-describedby="rekeningHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nominal Pengajuan Dana</label>
        <input type="text" class="form-control" id="rekening" aria-describedby="rekeningHelp">
    </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Password Transaksi</label>
        <input type="password" class="form-control" id="rekening" aria-describedby="rekeningHelp">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Saya telah mengisi data dengan benar</label>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
        
    </div>
</div>



@endsection