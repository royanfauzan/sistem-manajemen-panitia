<?php

namespace App\Http\Controllers;

use App\Models\Sie;
use App\Models\Tugas;
use Illuminate\Http\Request;

class UserTugasController extends Controller
{
    //
    public function index(Sie $sie)
    {
        //
        $idsie = $sie->id;

        return view('kegiatans.tugas',[
            'tugass' => Tugas::where('sie_id',$idsie)->get(),
            'sie'=> $sie
        ]);
    }
}
