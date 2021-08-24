<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = [
    	'nama', 'description', 'price', 'is_acitve',
    ];
}
