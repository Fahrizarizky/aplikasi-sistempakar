<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aturan extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function gejala() {
        return $this->belongsTo(Gejala::class);
    }
   
    public function tingkatstres() {
        return $this->belongsTo(Tingkatstres::class);
    }
}
