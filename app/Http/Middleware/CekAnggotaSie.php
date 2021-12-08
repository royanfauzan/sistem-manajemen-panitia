<?php

namespace App\Http\Middleware;

use App\Models\Menjabat;
use Closure;
use Illuminate\Http\Request;

class CekAnggotaSie
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
        $userid=auth()->user()->id;
        $pathurl = $request->path();
        $arraypath = explode('/',$pathurl);
        $id = intval(end($arraypath));

        $usermenjabat = Menjabat::where('sie_id',$id)
                                    ->where('user_id',$userid)
                                    ->where('status','aktif')->get()->first();
        if ($usermenjabat!=null) {
            return $next($request);
        }


        return redirect('/dashboard');
    }
}
