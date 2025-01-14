<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $table = 'blogs';
    protected $fillable = ['tittle', 'penulis'];
}
