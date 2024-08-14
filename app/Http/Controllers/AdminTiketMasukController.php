<?php

namespace App\Http\Controllers;

use App\Models\tiket;
use Illuminate\Http\Request;

class AdminTiketMasukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard-admin.Tiket-masuk.index',[
            'tiket'=> tiket::where('proses',0)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, tiket $masuk)
    {
   
     $validatedData = $request->validate([
        'proses' => ''
   
     ]);
     $validatedData['proses'] = 2;
     tiket::where('id', $masuk->id)->update($validatedData);
     return redirect('/dashboard-admin/tiket/masuk')->with('success', 'Laporan Diterima');

    }

    public function tolak(Request $request, tiket $masuk)
    {
   
     $validatedData = $request->validate([
        'proses' => ''
   
     ]);
     $validatedData['proses'] = 1;
     tiket::where('id', $request->id)->update($validatedData);
     return redirect('/dashboard-admin/tiket/masuk')->with('success', 'Laporan Ditolak');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, tiket $masuk)
    {
        // $validatedData = $request->validate([
        //     'proses' => ''
       
        //  ]);
        //  $validatedData['proses'] = 1;
        //  tiket::where('id', $masuk->id)->update($validatedData);
        //  return redirect('/dashboard-admin/tiket/masuk')->with('success', 'Laporan Diterima');
    
    }
}
