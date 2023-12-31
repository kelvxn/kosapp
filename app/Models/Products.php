<?php

namespace App\Models;

use App\Models\locations;
use App\Models\Favorite;
use App\Models\Type_Rooms;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
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
        return $this->belongsTo(Type_Rooms::class, 'type_rooms_id');
    }

    public function favorites()
    {
        return $this->belongsTo(Favorite::class, 'favorites_id');
    }
}
