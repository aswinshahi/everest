<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    //

    protected $fillable = ['title','contact_number','email','address', 'mobile_number'];
}
