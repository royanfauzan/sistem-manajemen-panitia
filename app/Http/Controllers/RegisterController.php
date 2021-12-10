<?php

namespace App\Http\Controllers;

use App\Mail\MailSend;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

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

        // PENGIRIM EMAIL

        // $details = [
        //     'nim' => $validatedData['nim'],
        //     'email' => $validatedData['email'],
        //     'nama_user' => $validatedData['nama_user']
        // ];

        // Mail::to($validatedData['email'])->send(new MailSend($details));

        // PENGIRIM EMAIL END

        $request->session()->flash('success','Akun Berhasil Didaftarkan');

        return redirect('/login');

    }
}
