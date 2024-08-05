<?php

namespace App\Http\Controllers;

use App\Models\Bagian;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('/Daftar/index');
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
        //
    }

    //Function Login
    public function authenticate(Request $request){
        $credentials =  $request->validate([
              'email' => 'required|email:dns',
              'password' => 'required'
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
              return redirect()->intended('/dashboard-user/index');

                    }
          return back()->with('loginError' , 'Login failed!');
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
