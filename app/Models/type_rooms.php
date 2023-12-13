<?php

namespace App\Models;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type_rooms extends Model
{
    use HasFactory;

    protected $fillable = [
        'type_rooms'
    ];

    public $timestamps = false;
    
    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
