<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoungeMenu extends Model
{
    use HasFactory;

    protected $fillable = [
        'menu_id',
        'lounge_id',
        'price',
    ];

    public function lounge(){
        return $this->belongsTo(Lounge::class);
    }
    public function menu(){
        return $this->belongsTo(Menu::class);
    }
}
