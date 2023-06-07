<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hookah extends Model
{
    use HasFactory;

    protected $fillable = [
        'mix_id',
        'weight',
        'lounge_tobacco_id',
    ];

    public function mixes(){
        return $this->belongsTo(Mix::class);
    }
    public function loungeTobacco(){
        return $this->belongsTo(LoungeTobacco::class);
    }
}
