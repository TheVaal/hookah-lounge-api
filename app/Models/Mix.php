<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mix extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'weight',
    ];

    public function hookahs(){
        return $this->hasMany(Hookah::class);
    }
    public function order(){
        return $this->belongsTo(Order::class);
    }
}
