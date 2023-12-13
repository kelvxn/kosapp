<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class locations extends Model
{
    use HasFactory;

    protected $fillable = [
        'city',
        'district'
    ];

    public $timestamps = false;

    public function products()
    {
        return $this->hasMany(Products::class);
    }
}
