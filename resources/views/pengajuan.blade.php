@extends('layout.mainlayout')
@section('title','PENGAJUAN')

@section('content')
<div class="container cont">
   <div class=" text-center">
    <h1>Pengajuan Dana<h1>
    </div>    
        <form>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label"></label>
        <label type="text-center" class="form-control" id="pengajuan">Ajukan Dana Sekarang</label>
    </div>
    <a class=" btn btn-primary mb-5" href="/pengajuan/buat">Submit</a>
        
    </form>
        
    </div>
</div>
    


@endsection