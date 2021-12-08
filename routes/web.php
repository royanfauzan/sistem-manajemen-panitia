<?php

use App\Http\Controllers\AgendaController;
use App\Http\Controllers\IntiAgendaController;
use App\Http\Controllers\IntiSieController;
use App\Http\Controllers\IntiTugasController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LaporanController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MenjabatController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SieController;
use App\Http\Controllers\TestKegiatanController;
use App\Http\Controllers\TugasController;
use App\Http\Controllers\UserAgendaController;
use App\Http\Controllers\UserKegiatanController;
use App\Http\Controllers\UserTugasController;
use App\Http\Controllers\UtamaController;
use App\Models\Agenda;
use App\Models\Jabatan;
use App\Models\Kegiatan;
use App\Models\Menjabat;
use App\Models\Tugas;
use App\Models\Sie;
use App\Models\User;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [LoginController::class,'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class,'ceklogin']);
Route::post('/logout', [LoginController::class,'logout']);

Route::get('/registrasi', [RegisterController::class,'index'])->middleware('guest');
Route::post('/registrasi',[RegisterController::class,'store']);

Route::get('/dashboard',[UtamaController::class,'dashboard'])->middleware('auth');

Route::get('/mylistkegiatan',[UtamaController::class,'mylistkegiatan'])->middleware('auth');

Route::get('/listkegiatan',[UtamaController::class,'listkegiatan'])->middleware('auth');
    
Route::resource('/kegiatans', UserKegiatanController::class)->middleware('auth');

// Route::resource('/listagenda', AgendaController::class);

Route::resource('/liststruktur', SieController::class)->middleware('auth');

Route::resource('/listmenjabat', MenjabatController::class)->middleware('auth');

Route::resource('/mjbcon/menjabats', MenjabatController::class)->middleware('auth');

Route::resource('/tgscon/tugas', TugasController::class)->middleware('auth');

Route::resource('/agndcon/agendas', AgendaController::class)->middleware('auth');

Route::resource('/gajalan/siecon/sies', SieController::class)->middleware('auth');

Route::get('tugas/{sie}', [UserTugasController::class,'index'])->middleware('auth','cekanggotasie');

Route::get('kelola/tugas/{kegiatan}', [IntiTugasController::class,'index'])->middleware('auth','cekinti');

Route::get('kelola/struktur/{kegiatan}', [IntiSieController::class,'index'])->middleware('auth','cekinti');

Route::get('kelola/agendas/{kegiatan}', [IntiAgendaController::class,'index'])->middleware('auth');

Route::get('user/agendas/{kegiatan}', [UserAgendaController::class,'index'])->middleware('auth');

Route::get('/rekrut',[UtamaController::class,'rekrutmen'])->middleware('auth');

Route::get('/laporan/cetak/{kegiatan}',[LaporanController::class,'index'])->middleware('auth','cekinti');

// development

    
// Route::get('/rekrut',function () {
//     return view('kegiatans.rekrutmen');
// });

Route::get('/laporan',function () {
    return view('kegiatans.laporan');
});

Route::get('/laporan/tester',function () {
    return view('kegiatans.tester-lap');
});


Route::get('/agenda',function () {
    return view('kegiatans.agenda');
});

Route::get('/tugas',function () {
    return view('kegiatans.tugas');
});

Route::get('/tugaskelola',function () {
    return view('kegiatans.kelolatugas');
});

Route::get('/struktur',function () {
    return view('kegiatans.struktur');
});

Route::get('/test/tugas',function () {
    return dd(Tugas::all());
});

Route::get('/test/user',function () {
    return dd(Sie::find(1)->menjabats->user());
});

Route::get('/test/kegiatan',function () {
    return dd(Menjabat::with(['jabatan','user'])->whereIn('sie_id',[1,2,3])->get());
});

Route::get('/test/kegiatanjauh',function () {
    $idkegiatan=3;
    $kegiatan=Kegiatan::with('sies.menjabats.user')->find($idkegiatan);
    $kegiatantgs=Kegiatan::with('sies.tugases')->find($idkegiatan);
    $jabatans=Jabatan::all();
    $agendas=Agenda::where('kegiatan_id',$idkegiatan)->get();

    return view('kegiatans.detilkegiatan',[
        'kegiatan'=>$kegiatan,
        'jabatans'=>$jabatans,
        'agendas'=>$agendas,
        'kegiatantgs'=>$kegiatantgs
    ]);
    // foreach ($kegiatan->sies as $sie) {
    //     echo $sie->nama_sie;
    //     echo '<br>';
    //     foreach ($sie->menjabats as $menjabat) {
    //         echo $menjabat->id;
    //         echo '<br>';
    //         echo $jabatans[$menjabat->jabatan_id-1]->nama_jabatan;
    //         echo '<br>';
    //         echo $menjabat->user->nama_user;
    //         echo '<br>';
    //     }
    //     echo '<br><br>';
    // }

    // dd($kegiatan,$jabatans);
});

Route::get('/test/kegiatandev',function () {
    $idkegiatan=3;
    $kegiatan=Kegiatan::with('sies.menjabats.user')->find($idkegiatan);
    $kegiatantgs=Kegiatan::with('sies.tugases')->find($idkegiatan);
    
    $jabatans=Jabatan::all();
    $agendas=Agenda::where('kegiatan_id',$idkegiatan)->get();

    $kegiatantgshitung=$kegiatantgs;

    $counter=0;

    $sietugases = array(); 

    foreach($kegiatantgshitung->sies as $sie){
        $datasie = collect();
        $datasie->put('nama',$sie->nama_sie);
        $jmlslese = 0;
        

        foreach($sie->tugases as $tugas){
            if (!strcmp($tugas->status_tugas,'ditugaskan')) {
                $jmlslese++;
            }
        }

        $datasie->put('persen',0);

        if ($sie->tugases->count()>0) {
            $persen = (int) ($jmlslese/$sie->tugases->count())*100;
            $datasie->put('persen',$persen);
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
        'progressies'=>$sietugases
    ]);
    // foreach ($kegiatan->sies as $sie) {
    //     echo $sie->nama_sie;
    //     echo '<br>';
    //     foreach ($sie->menjabats as $menjabat) {
    //         echo $menjabat->id;
    //         echo '<br>';
    //         echo $jabatans[$menjabat->jabatan_id-1]->nama_jabatan;
    //         echo '<br>';
    //         echo $menjabat->user->nama_user;
    //         echo '<br>';
    //     }
    //     echo '<br><br>';
    // }

    // dd($kegiatan,$jabatans);
});

// test