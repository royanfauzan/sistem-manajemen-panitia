<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Kegiatan;
use App\Models\Sie;
use Illuminate\Http\Request;

class IntiSieController extends Controller
{
    //
    public function index(Kegiatan $kegiatan)
    {
        //
        $idkegiatan = $kegiatan->id;

        $struktur = Kegiatan::with('sies.menjabats.user')->find($idkegiatan);

        $jabatans=Jabatan::all();

        $sies = Sie::where('kegiatan_id', $idkegiatan)->get();

        $sierekruts = Sie::with(['menjabats' => function ($query) {
            $query->where('status', '=', 'menunggu');
        }])->where('kegiatan_id', $idkegiatan)->get();

        return view('kegiatans.struktur', [
            'kegiatan'=>$struktur,
            'jabatans'=>$jabatans,
            'rekrutmens'=>$sierekruts,
            'sies'=>$sies
        ]);
    }
}
