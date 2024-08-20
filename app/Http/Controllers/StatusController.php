<?php

namespace App\Http\Controllers;

use App\Models\proses;
use App\Models\Status;
use App\Models\tiket;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    public function lanjutan(proses $id)
    {
        
        $validatedData['status'] = 2;
        proses::where('id', $id->id)->update($validatedData);
        return view('Dashboard.lanjutan.index',[
          "tiket"=> tiket::where("id",$id->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
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
    public function show(proses $tiket_status)
    {
 
        dd($tiket_status);
         $validatedData['proses'] = 3;
         tiket::where('id', $tiket_status->id)->update($validatedData);

         return redirect('/dashboard/tiket-proses')->with('success', 'Laporan Diterima');
    
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Status $status)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Status $status)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Status $status)
    {
        //
    }
}
