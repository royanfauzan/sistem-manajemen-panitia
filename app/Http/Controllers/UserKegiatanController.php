<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Jabatan;
use App\Models\Kegiatan;
use App\Models\Menjabat;
use App\Models\Sie;
use Illuminate\Http\Request;

class UserKegiatanController extends Controller
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
        // dd($request);
        $userid = auth()->user()->id;
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required',
            'penyelenggara' => 'required',
            'deskripsi_kegiatan' => 'required'
        ]);
        
        $validatedData['user_id'] = auth()->user()->id;
        // dd($validatedData);

        $kegiatan = Kegiatan::create($validatedData);

        $dataSie['nama_sie'] = 'inti';
        $dataSie['deskripsi_sie'] = 'inti';
        $dataSie['rekrutmen'] = false;
        $dataSie['kegiatan_id'] = $kegiatan->id;
        
        $sie = Sie::create($dataSie);

        $dataMenjabat['sie_id'] = $sie->id;
        $dataMenjabat['user_id'] = $userid;
        $dataMenjabat['jabatan_id'] = Jabatan::where('nama_jabatan','Ketua')->get()->first()->id;
        $dataMenjabat['status'] = 'aktif';
        
        Menjabat::create($dataMenjabat);

        return redirect('/kegiatans/'.$kegiatan->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function show(Kegiatan $kegiatan)
    {
        $userid = auth()->user()->id;
        $role = 'guest';
        $sieuser = null;
        $idkegiatan=$kegiatan->id;
        $kegiatan=Kegiatan::with('sies.menjabats.user')->find($idkegiatan);
        $kegiatantgs=Kegiatan::with('sies.tugases')->find($idkegiatan);

        
        //MENGAMBIL ROLE START
        $sies = Sie::select('id')->where('kegiatan_id',$idkegiatan)->get();
        $idsies=array(); 
        foreach($sies as $sie){
            $idsies[]=$sie->id;
        }

        $usermenjabat = Menjabat::with('jabatan')
                                ->whereIn('sie_id',$idsies)
                                ->where('user_id',$userid)->where('status','aktif')->get()->first();
    
        if ($usermenjabat!=null) {
            $role = 'anggota';
            $sieuser = $usermenjabat->sie_id;
            if (intval($usermenjabat->jabatan->level_akses)>=4) {
                $role = 'inti';
                // $menjabat->save();
                // dd($usermenjabat->jabatan->level_akses,$menjabat->jabatan->level_akses);
            }
        }
        // dd($role);
        //MENGAMBIL ROLE END
        
        $jabatans=Jabatan::all();
        $agendas=Agenda::where('kegiatan_id',$idkegiatan)->get();
        
        $kegiatantgshitung=$kegiatantgs;
        
        $counter=0;
        
        $sietugases = array(); 


        // $kegiatantester=Sie::with('tugases')->whereHas('tugases',
        // function($q){
        //     $q->where('status_tugas','selesai');
        // }
        // )->where('kegiatan_id',$idkegiatan)->get();



        // dd($kegiatantester);


        // $testfilter = $kegiatantgs->sies[1]->tugases->filter(function($tugas){
        //     return !strcmp($tugas->status_tugas,'selesai');
        // });

        // dd($testfilter);

        foreach($kegiatantgshitung->sies as $sie){
            $datasie = collect();
            $datasie->put('nama',$sie->nama_sie);
            $jmlslese = 0;
            $jmltugas= $sie->tugases->count();
            

            foreach($sie->tugases as $tugas){
                if (!strcmp($tugas->status_tugas,'selesai')) {
                    $jmlslese++;
                }
            }

            $datasie->put('persen',0);

            if ($jmltugas>0) {
                $persen = ($jmlslese/$sie->tugases->count())*100;
                $datasie->put('persen',intval($persen));
            }
            
            $datasie->put('jumlahlese',$jmlslese);
            $datasie->put('jumlahtugas',$sie->tugases->count());
            $sietugases[]=$datasie;
            $counter++;
        }


        return view('kegiatans.detilkegiatan',[
            'kegiatan'=>$kegiatan,
            'jabatans'=>$jabatans,
            'agendas'=>$agendas,
            'kegiatantgs'=>$kegiatantgs,
            'progressies'=>$sietugases,
            'roleuser'=>$role,
            'sieuser'=>$sieuser
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function edit(Kegiatan $kegiatan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kegiatan $kegiatan)
    {
        //
        $validatedData = $request->validate([
            'nama_kegiatan' => 'required',
            'penyelenggara' => 'required',
            'deskripsi_kegiatan' => 'required'
        ]);
        

        $kegiatan->nama_kegiatan = $validatedData['nama_kegiatan'];
        $kegiatan->penyelenggara = $validatedData['penyelenggara'];
        $kegiatan->deskripsi_kegiatan = $validatedData['deskripsi_kegiatan'];
        
        $kegiatan->save();

        return redirect("/kegiatans/$kegiatan->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kegiatan  $kegiatan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kegiatan $kegiatan)
    {
        //
    }
}
