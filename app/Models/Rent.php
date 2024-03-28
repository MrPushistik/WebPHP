<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    use HasFactory;

    public function building(){
        return $this->belongsTo(Building::class, "building_id");
    }
    public function lead(){
        return $this->belongsTo(Lead::class, "lead_id");
    }

    public function user(){
        return $this->belongsTo(User::class, "user_id");
    }

}
