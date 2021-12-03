<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Kegiatan;
use DateTime;
use Illuminate\Http\Request;

class AgendaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idKegiatan=1;
        $datakegiatan = Kegiatan::find($idKegiatan);

        return view('kegiatans.agenda',[
            'kegiatan'=>$datakegiatan,
            'agendas'=>Agenda::where('kegiatan_id',$idKegiatan)->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $idKegiatan=$request->get('kegiatan_id');
        $validatedData = $request->validate([
            'nama_agenda' => 'required',
            'deskripsi_agenda' => 'required',
            'tanggal_mulai' => 'required',
            'lokasi' => 'required',
        ]);

        $date = $validatedData['tanggal_mulai'];
        $createDate = new DateTime($date);
        $strip = $createDate->format('Y-m-d H:i:s');

        $validatedData['tanggal_mulai']=$strip;

        if (!empty($request->input('tanggal_selesai'))) {
            $date = $request->input('tanggal_selesai');
            $createDate = new DateTime($date);
            $strip = $createDate->format('Y-m-d H:i:s');

            $validatedData['tanggal_selesai']=$strip;
        }
        
        $validatedData['kegiatan_id'] = $idKegiatan;
        // dd($validatedData);

        Agenda::create($validatedData);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function show(Agenda $agenda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function edit(Agenda $agenda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Agenda $agenda)
    {
        //
        $validatedData = $request->validate([
            'nama_agenda' => 'required',
            'deskripsi_agenda' => 'required',
            'tanggal_mulai' => 'required',
            'lokasi' => 'required',
        ]);

        $date = $validatedData['tanggal_mulai'];
        $createDate = new DateTime($date);
        $strip = $createDate->format('Y-m-d H:i:s');

        $validatedData['tanggal_mulai']=$strip;

        if (!empty($request->input('tanggal_selesai'))) {
            $date = $request->input('tanggal_selesai');
            $createDate = new DateTime($date);
            $strip = $createDate->format('Y-m-d H:i:s');

            $validatedData['tanggal_selesai']=$strip;
            $agenda->tanggal_selesai = $validatedData['tanggal_selesai'];
        }
        
        $agenda->nama_agenda = $validatedData['nama_agenda'];
        $agenda->deskripsi_agenda = $validatedData['deskripsi_agenda'];
        $agenda->tanggal_mulai = $validatedData['tanggal_mulai'];
        $agenda->lokasi = $validatedData['lokasi'];

        $agenda->save();
        // dd($agenda);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agenda  $agenda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agenda $agenda)
    {
        //
    }
}
