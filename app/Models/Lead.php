<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'patronymic', 'email', 'phone'];

    public function rents(){
        return $this->hasMany(Rent::class, "lead_id");
    }

    public function requests(){
        return $this->hasMany(Request::class, "lead_id");
    }
}
