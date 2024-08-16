<?php

namespace App\Http\Controllers;

use App\Models\proses;
use App\Models\tiket;
use Illuminate\Http\Request;

class AdminTiketProsesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard-admin.Tiket-proses.index', [
            'tiket' => tiket::where('proses', 2)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tiket $prose) {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->tiket_id);
        $validatedData = $request->validate([
            'tiket_id' => 'required',
            'tindakan' => 'required',
            'bukti' => 'required',
        ], messages: [
            'tindakan.required' => 'Tindakan Harus Di isi',
            'tiket_id.required' => 'Tindakan Harus Di isi',
            'bukti.required' => 'Bukti harus di sertakan',

        ]);
        // dd($validatedData);
        proses::create($validatedData);
        return redirect('dashboard-admin/tiket/proses')->with('success', 'Tindakan di kirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request, tiket $prose)
    {

        return view('Dashboard-admin.Tiket-proses.tindak', [
            'tiket' => tiket::where('id', $prose->id)->get(),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(tiket $tiket)
    {
        return view('Dashboard-admin.Tiket-proses.edit'[]);
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
