<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

class dataShow extends Controller
{
    public function showAll()
    {
       $peserta = DB::select('select * from peserta');
       return view('welcome')->with('peserta',$peserta);
    }
    
}
