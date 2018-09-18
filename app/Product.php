<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //

    protected $fillable = ['title','description','product_image','product_code','cat_id','pages','width','length','latest'];
}
