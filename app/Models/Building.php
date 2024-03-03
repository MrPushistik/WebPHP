<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Building extends Model
{
    protected $fillable = ['address', 'size', 'type', 'heat'. 'power', 'price', 'desc', 'status', 'url'];
}
