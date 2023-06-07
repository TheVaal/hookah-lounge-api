<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaiterCall extends Model
{
    use HasFactory;

    public function table(){
        return $this->belongsTo(Table::class);
    }
    public function session(){
        return $this->belongsTo(Session::class);
    }
}
