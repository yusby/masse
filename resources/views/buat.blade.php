@extends('layout.mainlayout')
@section('title','Ajukan Dana')

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
                <h2>Ajukan<h1>
                </div>       
                <form action="pengajuan/simpan" method="POST">
                @csrf
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Username</label>
                        <input type="text" class="form-control" name="nama" placeholder="username">
                        </div> 
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Bank</label>
                        <input type="text" class="form-control" name="bank" placeholder="Nama Bank">
                        </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nama Fasilitas Kesehatan</label>
                        <input type="text" class="form-control" name="faskes" placeholder="Nama Faskes">
                    </div>                     
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nomer Rekening</label>
                        <input type="text" class="form-control" name="rekening" placeholder="nomer rekening">
                    </div> <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nominal Pengajuan</label>
                        <input type="text" class="form-control" name="nominal" placeholder="Nominal">
                    </div> 
                    <input type="submit" name="submit" class="btn btn-primary">
                </form>
            </div>
        </div>

        <!-- <div class="container cont">
        <div class=" text-center">
            <h1>Pengajuan Dana<h1>
            </div>    
                <form action="/pengajuan/buat" method="POST">
                    @csrf
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" name="id">
                </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Bank Tujuan</label>
                        <select class="form-select" name="bank">
                        <option selected>Pilih Bank</option>
                        <option value="1">BNI</option>
                        <option value="2">BRI</option>
                        <option value="3">BCA</option>
                        </select>
                </div>
                <div class="mb-3">
                    <label for="rekening" class="form-label">Nomer Rekening Tujuan</label>
                    <input type="text" class="form-control" name="rekening">
                </div>
                <div class="mb-3">
                    <label for="faskes" class="form-label">Fasilitas Kesehatan Tujuan</label>
                    <input type="text" class="form-control" name="faskes">
                </div>
                <div class="mb-3">
                    <label for="pengajuan" class="form-label">Nominal Pengajuan Dana</label>
                    <input type="text" class="form-control" name="nominal">
                </div>
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Saya telah mengisi data dengan benar</label>
                </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
                
            </div>
        </div> -->

@endsection