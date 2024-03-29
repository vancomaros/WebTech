<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $table = 'items';
    protected $fillable = ['title', 'description', 'rating', 'specs', 'color', 'brand', 'price', 'category', 'img'];

    use HasFactory;
}
