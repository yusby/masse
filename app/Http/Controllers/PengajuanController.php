<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengajuan;

class PengajuanController extends Controller
{
    public function pengajuan()
    {
        $pengajuan= pengajuan::all();
        return view ('pengajuan', compact(['pengajuan']));
    }
    public function buat()
    {
        return view('buat');
    }

    public function simpan(Request $request)
    {
        // dd($request->except(['_token','submit']));
        pengajuan::create($request->except(['_token','submit']));
        return redirect('/pengajuan');
    }
    public function statuspengajuan(){
    $pengajuan= pengajuan::all();
        return view ('statuspengajuan', compact(['pengajuan']));
    }
}
