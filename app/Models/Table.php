<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Table extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'lounge_id',
        'seats'
    ];

    public function lounge(){
        return $this->belongsTo(Lounge::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }
    public function calls(){
        return $this->hasMany(WaiterCall::class);
    }
}
