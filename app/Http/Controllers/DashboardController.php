<?php

namespace App\Http\Controllers;

use App\Models\tiket;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('dashboard/index',[
            'total'=>tiket::where('user_id', auth()->user()->id)->count(),
            'ajukan'=>tiket::where('user_id', auth()->user()->id)
            ->where('proses',0)->count(),
            'proses'=>tiket::where('user_id', auth()->user()->id)
            ->where('proses',2)->count(),
            'tolak'=>tiket::where('user_id', auth()->user()->id)
            ->where('proses',1)->count(),
            'terima'=>tiket::where('user_id', auth()->user()->id)
            ->where('proses',3)->count(),
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
