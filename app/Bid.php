<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
	protected $table = 'bids';
	protected $fillable = ['itemid', 'userid','bidamount'];
    //
}
