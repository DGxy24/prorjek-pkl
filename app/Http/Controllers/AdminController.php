<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\permasalahan;
use App\Models\tiket;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        return view('dashboard-admin.index', [
            'bagian' => Bagian::all(),
            'masalah' => permasalahan::all(),
            'akun' => User::all()->count(),
            'tiket' => tiket::all()->count(),
            'bagian1' => tiket::where('bagian_id', 1)->count(),
            'bagian2' => tiket::where('bagian_id', 2)->count(),
            'bagian3' => tiket::where('bagian_id', 3)->count(),
            'bagian4' => tiket::where('bagian_id', 4)->count(),
            'bagian5' => tiket::where('bagian_id', 5)->count(),
            'bagian6' => tiket::where('bagian_id', 6)->count(),
            'bagian7' => tiket::where('bagian_id', 7)->count(),
            'bagian8' => tiket::where('bagian_id', 8)->count(),
            'bagian9' => tiket::where('bagian_id', 9)->count(),
            'masalah1' => tiket::where('permasalahan_id', 1)->count(),
            'masalah2' => tiket::where('permasalahan_id', 2)->count(),
            'masalah3' => tiket::where('permasalahan_id', 3)->count(),
            'masalah4' => tiket::where('permasalahan_id', 4)->count(),
            'masalah5' => tiket::where('permasalahan_id', 5)->count(),
            'masalah6' => tiket::where('permasalahan_id', 6)->count(),
            'masalah7' => tiket::where('permasalahan_id', 7)->count(),
            'masalah8' => tiket::where('permasalahan_id', 8)->count(),
            'masalah9' => tiket::where('permasalahan_id', 9)->count(),

            //Menghitung data tiket
            'ajukan'=>tiket::where('proses',0)->count(),
            'proses'=>tiket::where('proses',2)->count(),
            'tolak'=>tiket::where('proses',1)->count(),
            'terima'=>tiket::where('proses',3)->count(),
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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
