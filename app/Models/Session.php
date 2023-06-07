<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = [
        'accessCode',
        'owner_id',
        'lounge_id',
        'status',
        'booking_date'
    ];

    public function order(){
        return $this->hasOne(Order::class);
    }
    public function lounge(){
        return $this->belongsTo(Lounge::class);
    }
    public function calls(){
        return $this->hasMany(WaiterCall::class);
    }
}
