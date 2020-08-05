<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['categoryid', 'name','minprice'];
    protected $table = 'items';
}
