<?php

namespace App\Http\Controllers;

use App\Models\Kegiatan;
use App\Models\Menjabat;
use App\Models\Sie;
use App\Models\Tugas;
use Illuminate\Http\Request;

class UtamaController extends Controller
{
    //
    public function dashboard()
    {
        //
        $userid = auth()->user()->id;
        $arrkegid = array();
        $arrsieid = array();
        $usermenjabats = Menjabat::with('sie')
                                ->where('user_id',$userid)
                                ->whereIn('status',['aktif','menunggu'])->get();
        // dd($usermenjabats);

        if ($usermenjabats!=null) {
            foreach ($usermenjabats as $usermenjabat) {
                $arrkegid[]=$usermenjabat->sie->kegiatan_id;
                $arrsieid[]=$usermenjabat->sie->id;
                $arrkegid = array_unique($arrkegid);
            }
        }

        $kegiatans = Kegiatan::whereIn('id',$arrkegid)->get();

        $tugases = Tugas::with('sie')->whereIn('sie_id',$arrsieid)->get();

        return view('dashboard',[
            'kegiatans' => $kegiatans,
            'tugases'=> $tugases
        ]);
    }

    public function mylistkegiatan()
    {
        //
        $userid = auth()->user()->id;
        $arrkegid = array();
        $arrsieid = array();
        $usermenjabats = Menjabat::with('sie')
                                ->where('user_id',$userid)
                                ->whereIn('status',['aktif','menunggu'])->get();
        // dd($usermenjabats);

        if ($usermenjabats!=null) {
            foreach ($usermenjabats as $usermenjabat) {
                $arrkegid[]=$usermenjabat->sie->kegiatan_id;
                $arrsieid[]=$usermenjabat->sie->id;
                $arrkegid = array_unique($arrkegid);
            }
        }

        $kegiatans = Kegiatan::whereIn('id',$arrkegid)->get();

        return view('kegiatans.listkegiatan',[
            'kegiatans' => $kegiatans,
            'halaman'=>'Diikuti'
        ]);
    }

    public function listkegiatan()
    {

        $kegiatans = Kegiatan::all();

        return view('kegiatans.listkegiatan',[
            'kegiatans' => $kegiatans,
            'halaman'=>'Semua'
        ]);
    }

    public function rekrutmen()
    {
        //
        $userid = auth()->user()->id;
        $arrkegid = array();
        $usermenjabats = Menjabat::with('sie')
                                ->where('user_id',$userid)
                                ->whereIn('status',['aktif','menunggu'])->get();
        // dd($usermenjabats);

        if ($usermenjabats!=null) {
            foreach ($usermenjabats as $usermenjabat) {
                $arrkegid[]=$usermenjabat->sie->kegiatan_id;
                $arrkegid = array_unique($arrkegid);
            }
        }

        // dd($arrkegid);

        $openreksies = Sie::with('kegiatan')->where('rekrutmen',1)->get();

        // dd($openreksies);

        return view('kegiatans.rekrutmen', [
            'openreksies'=>$openreksies,
            'kegdiikuti'=>$arrkegid
        ]);
    }
}
