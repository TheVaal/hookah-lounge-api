<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hardness extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    public function tobacco(){
        return $this->hasMany(Tobacco::class);
    }
}
