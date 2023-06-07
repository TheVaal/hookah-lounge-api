<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoungeTobacco extends Model
{
    use HasFactory;

    protected $fillable = [
        'tobacco_id',
        'lounge_id',
        'price',
    ];

    public function lounge(){
        return $this->belongsTo(Lounge::class);
    }

    public function tobacco(){
        return $this->belongsTo(Tobacco::class);
    }
    public function hookahs(){
        return $this->hasMany(Hookah::class);
    }
}
