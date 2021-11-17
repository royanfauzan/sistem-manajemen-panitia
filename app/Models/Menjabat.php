<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menjabat extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function sie(){
        return $this->belongsTo(Sie::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function jabatan(){
        return $this->hasOne(Jabatan::class);
    }


}
