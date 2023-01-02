<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\iuran;


class IuranController extends Controller
{
    public function iuran(){
        $iuran=iuran::all();
        return view('iuran',compact(['iuran']));
    }

}
