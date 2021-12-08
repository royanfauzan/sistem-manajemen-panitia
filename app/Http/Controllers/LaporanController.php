<?php

namespace App\Http\Controllers;

use App\Models\Agenda;
use App\Models\Jabatan;
use App\Models\Kegiatan;
use App\Models\Menjabat;
use App\Models\Sie;
use Illuminate\Http\Request;
use PDF;

class LaporanController extends Controller
{
    //
    public function index(Kegiatan $kegiatan)
    {
        //
        // $pdf = PDF::loadview('kegiatans.tester-lap',[
        //     'kegiatan' => $kegiatan
        // ]);
        // // $pdf = PDF::loadHTML("<h1>AAAAAAAAAAAA</h1>");

        // return $pdf->stream();
        $userid = auth()->user()->id;
        $role = 'guest';
        $sieuser = null;
        $idkegiatan=$kegiatan->id;

        // punya ringkasan
        $jmlsie = 0;
        $jmlanggota = 0;
        $jmlovrtgs = 0;
        $jmlovrtgslse = 0;
        $persenovr = 0;

        $kegiatan=Kegiatan::with('sies.menjabats.user')->find($idkegiatan);
        $kegiatantgs=Kegiatan::with('sies.tugases')->find($idkegiatan);

        
        //MENGAMBIL ROLE START
        $sies = Sie::select('id')->where('kegiatan_id',$idkegiatan)->get();
        $idsies=array(); 
        foreach($sies as $sie){
            $idsies[]=$sie->id;
        }

        $jmlsie = $sies->count();

        $usermenjabat = Menjabat::with('jabatan')
                                ->whereIn('sie_id',$idsies)
                                ->where('user_id',$userid)->where('status','aktif')->get()->first();
        
        $totalanggota = Menjabat::whereIn('sie_id',$idsies)->where('status','aktif')->get();
        $jmlanggota = $totalanggota->count();
    
        if ($usermenjabat!=null) {
            $role = 'anggota';
            $sieuser = $usermenjabat->sie_id;
            if (intval($usermenjabat->jabatan->level_akses)>=4) {
                $role = $usermenjabat->jabatan->nama_jabatan;
            }
        }
        // dd($role);
        //MENGAMBIL ROLE END
        
        $jabatans=Jabatan::all();
        $agendas=Agenda::where('kegiatan_id',$idkegiatan)->get();
        
        $kegiatantgshitung=$kegiatantgs;
        
        $counter=0;
        
        $sietugases = array(); 


        foreach($kegiatantgshitung->sies as $sie){
            $datasie = collect();
            $datasie->put('nama',$sie->nama_sie);
            $jmlslese = 0;
            $jmltugas= $sie->tugases->count();
            $jmlovrtgs += $jmltugas; 
            

            foreach($sie->tugases as $tugas){
                if (!strcmp($tugas->status_tugas,'selesai')) {
                    $jmlslese++;
                }
            }

            $jmlovrtgslse += $jmlslese;

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

        if ($jmlovrtgs>0) {
            $persenovr = ($jmlovrtgslse/$jmlovrtgs)*100;
            $persenovr = intval($persenovr);
        }


        return view('kegiatans.laporan',[
            'kegiatan'=>$kegiatan,
            'jabatans'=>$jabatans,
            'agendas'=>$agendas,
            'kegiatantgs'=>$kegiatantgs,
            'progressies'=>$sietugases,
            'roleuser'=>$role,
            'sieuser'=>$sieuser,
            'persenovr'=>$persenovr,
            'jmlsie'=>$jmlsie,
            'jmlanggota'=>$jmlanggota,
            'jmlovrtgs'=>$jmlovrtgs,
            'jmlovrtgslse'=>$jmlovrtgslse
        ]);
    }
}
