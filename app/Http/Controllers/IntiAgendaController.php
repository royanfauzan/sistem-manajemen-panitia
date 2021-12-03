<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Kegiatan;
use Illuminate\Http\Request;

class IntiAgendaController extends Controller
{
    //
    public function index(Kegiatan $kegiatan)
    {
        //
        $idkegiatan = $kegiatan->id;

        $agendas = Agenda::where('kegiatan_id', $idkegiatan)->get();

        return view('kegiatans.agenda', [
            'kegiatan'=>$kegiatan,
            'agendas'=>$agendas
        ]);
    }
}
