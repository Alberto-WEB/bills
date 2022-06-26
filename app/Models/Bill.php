<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bill extends Model
{
    use HasFactory;
    
    //relacion uno a uno (inversa)
    public function buy(){
        return $this->belongsTo(Buy::class, 'buy_id');
    }
}
