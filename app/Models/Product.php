<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'price', 'tax', 'stoke',
    ]; 

    //relacion uno a uno
    public function buy(){
        return $this->hasOne(Buy::class, 'id');
    }
}
