<?php

namespace App\Http\Controllers;

use App\Models\proses;
use App\Models\tiket;
use Illuminate\Http\Request;

class TiketSelesaiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view('Dashboard.tiket-selesai.index',[
            'tiket' => tiket::where('proses','=',3)
            ->where('user_id', auth()->user()->id)->get()

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
    public function show(tiket $tiket_selesai)
    {
        // dd($tiket_selesai);
        return view('Dashboard.tiket-selesai.show',[
            'tiket' => proses::where('tiket_id',$tiket_selesai->id)->get()
        ]);
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
    public function update(Request $request, tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tiket $tiket)
    {
        //
    }
}
