<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breakfast extends Model
{
    protected $fillable = ['url', 'nama', 'desc', 'harga'];
}
