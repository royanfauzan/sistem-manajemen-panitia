<?php

namespace App\Http\Controllers;

use App\Models\Menjabat;
use Illuminate\Http\Request;

class MenjabatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
            'nim' => 'required',
            'sie_id' => 'required',
            'jabatan_id' => 'required'
        ]);
        
        $validatedData['status']= 'aktif';
        
        dd($validatedData);

        Menjabat::create($validatedData);
        return redirect('/dashboard');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Menjabat  $menjabat
     * @return \Illuminate\Http\Response
     */
    public function show(Menjabat $menjabat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Menjabat  $menjabat
     * @return \Illuminate\Http\Response
     */
    public function edit(Menjabat $menjabat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Menjabat  $menjabat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Menjabat $menjabat)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Menjabat  $menjabat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Menjabat $menjabat)
    {
        //
    }
}
