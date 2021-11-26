<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sie extends Model
{
    use HasFactory;
    protected $guarded=['id'];
    
    public function kegiatan(){
        return $this->belongsTo(Kegiatan::class);
    }

    public function menjabats(){
        return $this->hasMany(Menjabat::class);
    }

    public function tugases(){
        return $this->hasMany(Tugas::class);
    }

    
}
