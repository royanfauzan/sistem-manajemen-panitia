<?php

namespace App\Http\Controllers;

use App\Models\Sie;
use Illuminate\Http\Request;

class SieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('kegiatans.struktur');
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
            'nama_sie' => 'required',
            'deskripsi_sie' => 'required'
        ]);
        
        $validatedData['rekrutmen']= null!=$request->input('rekrutmen');
        
        $validatedData['kegiatan_id'] = $idKegiatan;
        dd($validatedData);

        Sie::create($validatedData);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Sie  $sie
     * @return \Illuminate\Http\Response
     */
    public function show(Sie $sie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Sie  $sie
     * @return \Illuminate\Http\Response
     */
    public function edit(Sie $sie)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Sie  $sie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sie $sie)
    {
        //
        $sie = Sie::find($request->input('id'));
        $sie->rekrutmen = false;
        if ($request->input('rekrutmen')!=null) {
            $sie->rekrutmen = true;
        }
        $sie->nama_sie = $request->input('nama_sie');
        $sie->deskripsi_sie = $request->input('deskripsi_sie');
        // dd($sie,$request);

        $sie->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Sie  $sie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sie $sie)
    {
        //
    }
}
