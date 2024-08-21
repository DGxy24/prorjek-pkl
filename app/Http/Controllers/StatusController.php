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

    public function view(tiket $tiket)
    {   
     
        
        //Menuju form Dashboard status
        return view('Dashboard.status.index',[
            "tiket"=> proses::where("tiket_id",$tiket->id)->get()
          ]);
    }

    public function lanjutan(proses $id,tiket $tiket)
    {
        // dd($tiket);
        // $validatedData['status'] = 2;
        // proses::where('id', $id->id)->update($validatedData);
        //Menuju Form Lanjutan
        return view('Dashboard.lanjutan.index',[
          "proses"=> proses::where("id",$id->id)->get()
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
        $validatedData = $request->validate([
            'user_id'=>'',
            'tiket_id' => '',
            'tindakan' => 'required',
            'bukti' => 'required',
        ], messages: [
            'tindakan.required' => 'Tindakan Harus Di isi',
            'tiket_id.required' => 'Tindakan Harus Di isi',
            'bukti.required' => 'Bukti harus di sertakan',

        ]);
        $proses_update['status']=2;
        // $validatedData['status'] = 2;
        proses::where('id', $request->proses_id)->update($proses_update);
        // Mengubah data file agar bisa disimpan
        
        $validatedData['bukti']= $request->file('bukti')->store('bukti-proses');
        $validatedData['tindakan'] = strip_tags($request->input('tindakan'));
        proses::create($validatedData);
        return redirect('dashboard/tiket-proses')->with('success', 'Tindakan di kirim');
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
