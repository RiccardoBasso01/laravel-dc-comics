<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'series', 'type', 'description', 'thumb', 'price', 'sale_date', 'page_count', 'writers', 'artists', 'rated'];
}
