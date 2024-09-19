<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;

    public function area() //単数系
    {
        return $this->belongsTo(Area::class); //belongsTo(属するという意味)
    }

    public function routes()
    {
        return $this->belongsToMany(Route::class);
    }
}
