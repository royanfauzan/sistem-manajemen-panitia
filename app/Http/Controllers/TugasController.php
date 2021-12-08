<?php

namespace App\Http\Controllers;

use App\Models\Sie;
use App\Models\Tugas;
use Illuminate\Http\Request;

class TugasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $idsie = 4;
        $datasie = Sie::find($idsie);
    
        return view('kegiatans.tugas',[
            'tugass' => Tugas::where('sie_id',$idsie)->get(),
            'sie'=> $datasie
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
        $validatedData = $request->validate([
            'sie_id' => 'required',
            'judul' => 'required',
            'deskripsi' => 'required'
        ]);
        
        $validatedData['catatan']= $request->input('catatan');
        
        // dd($validatedData);

        Tugas::create($validatedData);
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function show(Tugas $tuga)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function edit(Tugas $tuga)
    {
        //
        dd($tuga);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tugas $tuga)
    {
        //
        // dd($request);
        if ($request->get('catatan')!=null) {
            $tuga->catatan = $request->get('catatan');
        }
        $tuga->status_tugas = $request->get('status');

        // dd($tuga);
        $tuga->save();

        return back();
        // dd($tuga);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tugas  $tugas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tugas $tuga)
    {
        //
    }
}
