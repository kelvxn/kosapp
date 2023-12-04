<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeRooms extends Model
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
