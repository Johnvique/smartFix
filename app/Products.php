<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //the products database values
    protected $fillable = [
        'name','description', 'price','qty'
    ];
    
}
