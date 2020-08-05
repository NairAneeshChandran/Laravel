<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Item;
use App\Bid;

class BidController extends Controller
{
    public function store(Request $request)
    {
    	$validation = Validator::make($request->all(),[ 
        'itemid' => 'required',
        'userid' => 'required',
        'bidamount' => 'required',
    ]);

    if($validation->fails())
    {
    	return response()->json(['error' => $validation->errors()], 404);
    } 
    else
    {
		$amount_check = Item::where('id', $request->itemid)
	    ->where('minprice', '>', $request->bidamount)
	    ->exists(); //true or false

	    $bid_amount_check = Bid::where('itemid', $request->itemid)
	    ->where('bidamount', '>', $request->bidamount)
	    ->exists();

		if($amount_check || $bid_amount_check){

			return response()->json(['error' => 'Please check the amount'], 404);
		}
		else
		{
			return Bid::create($request->all());
		}
	}
    }
}
