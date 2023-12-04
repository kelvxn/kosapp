<?php

namespace App\Models;

use App\Models\locations;
use App\Models\Favorites;
use App\Models\TypeRooms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'size',
        'location',
        'price',
        'description'
    ];

    public function locations()
    {
        return $this->belongsTo(Locations::class, 'locations_id');
    }

    public function typeRooms()
    {
        return $this->belongsTo(TypeRooms::class, 'type_rooms_id');
    }

    public function favorites()
    {
        return $this->belongsTo(Favorites::class, 'favorites_id');
    }
}

