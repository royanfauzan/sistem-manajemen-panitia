<?php

namespace App\Http\Controllers;

use App\Models\Menjabat;
use App\Models\Sie;
use App\Models\User;
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
        //FIX THIS WITH AUTH
        $userid = 1;
        $status = 'menunggu';
        $validatedData = $request->validate([
            'nim' => 'required',
            'sie_id' => 'required',
            'jabatan_id' => 'required'
        ]);

        $validatedData['user_id']=User::where('nim',$validatedData['nim'])->get()->first()->id;

        if ($userid!=$validatedData['user_id']) {
            $status='aktif';
        }
        
        $validatedData['status']= $status;
        
        // dd($validatedData);

        Menjabat::create($validatedData);
        return back();
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
        //FIX THIS WITH AUTH
        $userid = 1;
        $kegiatanid = Sie::find($menjabat->sie_id)->kegiatan_id;

        $sies = Sie::select('id')->where('kegiatan_id',$kegiatanid)->get();

        //Mengambil id sie kegiatan
        $idsies=array(); 
        foreach($sies as $sie){
            $idsies[]=$sie->id;
        }

        $pengganti = Menjabat::with('jabatan')
                                ->whereIn('sie_id',$idsies)
                                ->where('user_id',$userid)->where('status','aktif')->get()->first();

        

        $menjabat->sie_id = $request->input('sie_id');
        $menjabat->jabatan_id = $request->input('jabatan_id');

        $menjabat->status = $request->input('status');

        if ($pengganti!=null) {
            if (intval($pengganti->jabatan->level_akses)>=intval($menjabat->jabatan->level_akses)) {
                // $menjabat->save();
                // dd($pengganti->jabatan->level_akses,$menjabat->jabatan->level_akses);
            }
        }


        dd($menjabat);
        return back();
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
