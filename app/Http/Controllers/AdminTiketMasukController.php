<?php

namespace App\Http\Controllers;

use App\Models\tiket;
use Illuminate\Http\Request;

class AdminTiketMasukController extends Controller
{
  public function  index(){
   
    return view('Dashboard-admin.Tiket-masuk.index',[
        'tiket'=> tiket::all()
    ]);
    }
}
