<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tobacco extends Model
{
    use HasFactory;

    protected $fillable = [
        'manufacturer_id',
        'hardness_id',
        'taste',
    ];

    public function loungeTobaccos(){
        return $this->hasMany(LoungeTobacco::class);
    }

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class);
    }

    public function hardness(){
        return $this->belongsTo(Hardness::class);
    }
}
