<?php

namespace App\Http\Middleware;

use App\Models\Kegiatan;
use App\Models\Menjabat;
use App\Models\Sie;
use Closure;
use Illuminate\Http\Request;

class CekInti
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        // FIX WITH AUTH
        $userid=1;
        $pathurl = $request->path();
        $arraypath = explode('/',$pathurl);
        $id = intval(end($arraypath));

        $sies = Sie::select('id')->where('kegiatan_id',$id)->get();
        $idsies=array(); 
        foreach($sies as $sie){
            $idsies[]=$sie->id;
        }

        $usermenjabat = Menjabat::with('jabatan')
                                ->whereIn('sie_id',$idsies)
                                ->where('user_id',$userid)->where('status','aktif')->get()->first();
        
        if ($usermenjabat!=null) {
            if (intval($usermenjabat->jabatan->level_akses)>=4) {
                return $next($request);
            }
        }

        dd($id);

        return redirect('/dashboard');
    }
}
