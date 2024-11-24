<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tingkatstres extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function aturan() {
        return $this->hasMany(Aturan::class);
    }
}
