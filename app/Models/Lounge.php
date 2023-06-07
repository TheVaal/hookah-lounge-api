<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lounge extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'address',
        'city',
        'state',
        'postal_code',
        'country',
    ];

    public function loungeMenus(){
        return $this->hasMany(LoungeMenu::class);
    }
    
    public function loungeTobaccos(){
        return $this->hasMany(LoungeTobaccos::class);
    }

    public function tables(){
        return $this->hasMany(Table::class);
    }

    public function sessions(){
        return $this->hasMany(Session::class);
    }

}
