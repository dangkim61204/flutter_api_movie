<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  use HasFactory;

     protected $fillable = [
        'title', 'genre', 'episodes', 'duration', 'status', 'actors', 'rating', 'imageUrl', 'content'
    ];
}
