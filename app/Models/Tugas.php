<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tugas extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function sie(){
        return $this->belongsTo(Sie::class);
    }
}
