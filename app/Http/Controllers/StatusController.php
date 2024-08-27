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
    public function index() {}

    public function view(tiket $tiket)
    {


        //Menuju form Dashboard status
        return view('Dashboard.status.index', [
            "tiket" => proses::where("tiket_id", $tiket->id)->get()
        ]);
    }

    public function lanjutan(proses $id, tiket $tiket)
    {
        // dd($tiket);
        // $validatedData['status'] = 2;
        // proses::where('id', $id->id)->update($validatedData);
        //Menuju Form Lanjutan
        return view('Dashboard.lanjutan.index', [
            "proses" => proses::where("id", $id->id)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(tiket $tiket)
    {
        // dd($tiket);
        return view('Dashboard.Status.create', [
            'tiket' => tiket::where('id', $tiket->id)->get()
        ]);
    }

    public function selesai(proses $tiket)
    {
           
        // dd(auth()->user()->id);
        // dd($tiket->tiket->user_id);
    
        if($tiket->tiket->user_id !=auth()->user()->id){
            abort(404);
        }

        $selesai_proses['status'] = 1;
        $selesai_tiket['proses'] = 3;
        //Semua data proses yang memiliki tiket id seperti yg ada di request, statusnya menjadi 1
        proses::where('tiket_id', $tiket->tiket_id)->update($selesai_proses);

        //Mengubah data proses di Tiket menjadii 3 (Selesai)
        tiket::where('id', $tiket->tiket_id)->update($selesai_tiket);


       return redirect('/dashboard/tiket-selesai')
       ->with('success', 'Laporan Tiket Selesai');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $validatedData = $request->validate([
            'user_id' => '',
            'tiket_id' => '',
            'tindakan' => 'required',
            'bukti' => 'required|mimes:pdf',
        ], messages: [
            'tindakan.required' => 'Tindakan Harus Di isi',
            // 'tiket_id.required' => 'Tindakan Harus Di isi',
            'bukti.required' => 'Bukti harus di sertakan',
            'bukti.mimes' => 'File harus PDF!',

        ]);
        // $proses_update['status'] = 2;
        // $validatedData['status'] = 2;
        // proses::where('id', $request->proses_id)->update($proses_update);
        // Mengubah data file agar bisa disimpan

        $proses['status'] = 2;
        $validatedData['bukti'] = $request->file('bukti')->store('bukti-proses');
        $validatedData['tindakan'] = strip_tags($request->input('tindakan'));
        proses::create($validatedData);
        proses::where('tiket_id', $request->tiket_id)->update($proses);
        return redirect('dashboard/tiket-proses/' . $request->tiket_id . '/lihat');
    }

    /**
     * Display the specified resource.
     */
    public function show(proses $tiket_status)
    {

        // dd($tiket_status);
        $validatedData['proses'] = 3;
        tiket::where('id', $tiket_status->id)->update($validatedData);

        return redirect('/dashboard/tiket-selesai')->with('success', 'Laporan selesai');
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
