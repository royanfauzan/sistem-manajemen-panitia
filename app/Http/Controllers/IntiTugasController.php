<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Sie;
use Illuminate\Http\Request;

class IntiTugasController extends Controller
{
    //
    public function index(Kegiatan $kegiatan)
    {
        //
        $idkegiatan = $kegiatan->id;

        $sies = Sie::where('kegiatan_id', $idkegiatan)->get();

        $sietugasses = Sie::with('tugases')->where('kegiatan_id', $idkegiatan)->get();

        // $sietugasmenunggus = Sie::with('tugases')->whereHas(
        //     'tugases',
        //     function ($q) {
        //         $q->where('status_tugas', 'menunggu');
        //     }
        // )->where('kegiatan_id', $idkegiatan)->get();

        $sietugasmenunggus = Sie::with(['tugases' => function ($query) {
            $query->where('status_tugas', '=', 'menunggu');
        }])->where('kegiatan_id', $idkegiatan)->get();

        return view('kegiatans.kelolatugas', [
            'tugassies' => $sietugasses,
            'menunggusies' => $sietugasmenunggus,
            'sies'=>$sies
        ]);
    }
}
