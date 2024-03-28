<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['address', 'size', 'type', 'heat'. 'power', 'price', 'desc', 'status', 'url'];

    public function rents(){
        return $this->hasMany(Rent::class, "building_id");
    }

    public function photos(){
        return $this->hasMany(Photo::class,"building_id");
    }

}
