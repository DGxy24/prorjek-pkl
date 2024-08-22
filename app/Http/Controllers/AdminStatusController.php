<?php

namespace App\Http\Controllers;

use App\Models\proses;
use App\Models\status;
use App\Models\tiket;
use Illuminate\Http\Request;

class AdminStatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tiket $tiket)
    {
        // dd($tiket);
        return view('Dashboard-admin.Status.create',[
            'tiket'=> tiket::where('id',$tiket->id)->get()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => '',
            'tiket_id' => '',
            'tindakan' => 'required',
            'bukti' => 'required',
        ], messages: [
            'tindakan.required' => 'Tindakan Harus Di isi',
            'tiket_id.required' => 'Tindakan Harus Di isi',
            'bukti.required' => 'Bukti harus di sertakan',

        ]);

        
        $proses['status'] = 2;
        $validatedData['bukti'] = $request->file('bukti')->store('bukti-proses');
        $validatedData['tindakan'] = strip_tags($request->input('tindakan'));
        // dd($validatedData);
        proses::create($validatedData);
        proses::where('tiket_id', $request->tiket_id)->update($proses);
        return redirect('/dashboard-admin/tiket/status/'.$request->tiket_id)->with('success', 'Tindakan di kirim');
    }

    /**
     * Display the specified resource.
     */
    public function show(tiket $status)
    {

        return view('Dashboard-admin.Status.index', [
            'tiket' => proses::where('tiket_id', $status->id)->get(),
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
