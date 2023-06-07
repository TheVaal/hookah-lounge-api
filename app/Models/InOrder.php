<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'lounge_menu_id',
        'quantity',
        'guest_number',
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }
    public function loungeMenu(){
        return $this->belongsTo(LoungeMenu::class);
    }
}
