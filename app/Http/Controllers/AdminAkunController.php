<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminAkunController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Dashboard-admin.Users.index', [
            'akun' => User::all()->where('level',0)
        ]);
    }

    public function admin()
    {
        return view('Dashboard-admin.Users.admin_index', [
            'akun' => User::where('level',1)->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dashboard-admin.Users.create', [
            'bagian' => Bagian::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:15', 'unique:users'],
            'bagian_id' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
        ], messages: [
            'name.required' => 'Nama harus diisi',
            'username.required' => 'Username harus diisi',
            'username.unique' => 'Username sudah digunakan,silahkan gunakan username lain',
            'username.min' => 'Username sudah digunakan,silahkan gunakan username lain',
            'bagian_id.required' => 'Bagian/Bidang harus dipilih',
            'email.required' => 'Email harus diisi',
            'email.unique' => 'Email sudah digunakan,gunakan email lain',
            'email.email' => 'Email tidak valid,gunakan Email yang valid. Contoh : contoh@gmail.com',
            'password.required' => 'Password harus diisi',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
        return redirect('/dashboard-admin/user')->with('success', 'Akun Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {

        return view('Dashboard-admin.Users.edit', [
            'user' => User::where('username', $user->username)->get(),
            'bagian' => Bagian::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
       
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'bagian_id' => 'required',
            'password' => 'required|min:8|max:255'
        ], messages: [
            'name.required' => 'Nama Wajib Diisi',
            'password.required' => 'Password wajib diisi',
            'password.min' => 'Password minimal 8',
        ]);
        $validatedData['password'] = Hash::make($validatedData['password']);

        User::where('id', $user->id)->update($validatedData);
        return redirect('/dashboard-admin/user')->with('success', 'Akun Berhasil DI Edit');
        // User::where('email',$request->email)->update($validatedData);

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
