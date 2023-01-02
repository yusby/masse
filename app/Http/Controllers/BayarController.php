<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\bayar;

class BayarController extends Controller
{
    public function bayar(){
        $bayar=bayar::all();
        return view('bayar',compact(['bayar']));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request)
    {
        // dd($request->except(['_token','submit']));
        bayar::create($request->except(['_token','submit']));   
        return redirect('/bayar');
    }
}