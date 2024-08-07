<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/Daftar/index',[
            'bagian' =>Bagian::all()
        ]);
    }

    public function login()
    {
        return view('/Login/index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
    }

    //Function Login
    public function authenticate(Request $request){
        $credentials =  $request->validate([
              'username' => 'required',
              'password' => 'required'
          ],messages : [
            'username.required' => 'Username harus diisi',
            'password.required' => 'Password harus diisi'
          ]);
  
        //   if(Auth::attempt($credentials)){
        //       $request->session()->regenerate();
        //       if(auth()->guest() || !auth()->user()->is_admin){
                     
        //       return redirect()->intended('/dashboard');
        //       }
        //       return redirect()->intended('/dashboard/categories');
        //   }
                    if(Auth::attempt($credentials)){
              $request->session()->regenerate();
              return redirect()->intended('/dashboard');
                    }
          return back()->with('loginError' , 'Login failed!');
      }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required' , 'min:3' , 'max:15' , 'unique:users'],
            'bagian_id' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:5|max:255'
            ], messages : [
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
            return redirect('/')->with('success', 'Akun Berhasil Ditambahkan');
      
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
