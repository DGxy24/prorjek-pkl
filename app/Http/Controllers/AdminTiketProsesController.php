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

    public function cek_selesai(tiket $id)
    {
        // dd($id);
        return view('Dashboard-admin.tiket-selesai.show', [
            'tiket' => proses::where('tiket_id', $id->id)->get()
        ]);
    }

    public function selesai()
    {
        //Sementara untuk bisa diliat,tolong hapus jika sudah diubah
        return view('Dashboard-admin.Tiket-selesai.index', [
            'tiket' => tiket::where('proses', 3)->get()
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

        // dd($request->user_id);
        $validatedData = $request->validate([
            'tiket_id' => '',
            'user_id' => '',
            'tindakan' => 'required',
            'bukti' => 'required|mimes:pdf',
        ], messages: [
            'tindakan.required' => 'Tindakan Harus Di isi',
            'bukti.required' => 'Bukti harus di sertakan',
            'bukti.mimes' => 'File harus PDF!',
        ]);
        // Mengubah data file agar bisa disimpan

        $validatedData['bukti'] = $request->file('bukti')->store('bukti-proses');
        $validatedData['tindakan'] = strip_tags($request->input('tindakan'));
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
    public function edit(tiket $prose)
    {

        return view('Dashboard-admin.Tiket-proses.edit', [
            'tiket' => proses::where('tiket_id', $prose->id)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, proses $prose)
    {

        $validatedData = $request->validate([
            'tiket_id' => 'required',
            'tindakan' => 'required',

        ]);
        $validatedData['tindakan'] = strip_tags($request->input('tindakan'));
        if ($request->file('bukti')) {
            $validatedData['bukti'] = $request->file('bukti')->store('bukti-proses');
        }

        proses::where('id', $prose->id)->update($validatedData);
        return redirect('dashboard-admin/tiket/proses')->with('success', 'Tindakan di kirim');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(tiket $tiket)
    {
        //
    }
}
