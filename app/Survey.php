<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Survey extends Model
{
    //
    protected $fillable = ['productsPhoto_id', 'user_id', 'like','unlike'];
    //
}
