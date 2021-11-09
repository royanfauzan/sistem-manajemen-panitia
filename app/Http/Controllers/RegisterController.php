<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    //
    public function index(){
        return view('login.register');
    }

    public function store(Request $request){

        $validatedData = $request->validate([
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:30',
            'nim' => 'required|unique:users',
            'nama_user' => 'required|max:255',
            'no_telpon' => 'max:255'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        $request->session()->flash('success','Akun Berhasil Didaftarkan');

        return redirect('/login');

    }
}
