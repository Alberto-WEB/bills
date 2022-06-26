<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Buy extends Model
{
    use HasFactory;

    //relacion uno a muchos(inversa)
    public function usuario() {
        return $this->belongsTo(User::class, 'user_id');
    }

    //relacion uno a uno (inversa)
    public function product(){
        return $this->belongsTo(Product::class, 'product_id');
    }

     //relacion uno a uno
     public function bill(){
        return $this->hasOne(Bill::class, 'id');
    }
}
