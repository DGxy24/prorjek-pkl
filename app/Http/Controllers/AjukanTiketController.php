<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\permasalahan;
use App\Models\Tiket;
use Illuminate\Http\Request;

class AjukanTiketController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // return view('Dashboard.Ajukan-tiket.index', [
        return view('Dashboard.Ajukan-tiket.index', [
            'tiket' => tiket::where('proses','=',0)->where('user_id', auth()->user()->id)->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard.Ajukan-tiket.create', [
            'masalah' => permasalahan::all(),
            'bagian' => Bagian::where('id', auth()->user()->bagian_id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'bagian_id' => 'required',
            'permasalahan_id' => 'required',
            'penjelasan' => 'required',
            'tindakan' => 'required',
        ], messages: [
            'permasalahan_id.required' => 'Jenis Permasalahan Harus di Pilih!',
            'penjelasan.required' => 'Penjelasan masalah harus di isi!',
            'tindakan.required' => 'Tindakan harus di isi!',
        ]);

        // membersihkan string
        $validatedData['tindakan'] = strip_tags($request->input('tindakan'));
        $validatedData['penjelasan'] = strip_tags($request->input('penjelasan'));

        $validatedData['bagian_id'] = auth()->user()->bagian_id;
        Tiket::create($validatedData);
        return redirect('/dashboard/ajukan-tiket')->with('success', 'Laporan Berhasil Dikirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(Tiket $tiket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Tiket $tiket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Tiket $tiket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Tiket $tiket)
    {
        //
    }
}
