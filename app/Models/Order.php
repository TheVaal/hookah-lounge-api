<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'lounge_id',
        'table_id',
        'session_id',
        'sum',
        'status',
        'closed'
    ];

    public function session(){
        return $this->belongsTo(Session::class);
    }

    public function table(){
        return $this->belongsTo(Table::class);
    }
    public function inOrder(){
        return $this->hasMany(InOrder::class);
    }

    public function mixes(){
        return $this->hasMany(Mix::class);
    }
}
