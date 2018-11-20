<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductsPhoto extends Model
{
    //
     protected $fillable = ['user_id', 'filename','description'];
 
    public function user()
    {
        return  $this->belongsTo('App\User');
    }
}
