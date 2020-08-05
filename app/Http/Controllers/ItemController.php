<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;

class ItemController extends Controller
{
	/*
		This function is used to create new item.
	*/
    public function store(Request $request)
    {
    	return Item::create($request->all());
    }
    public function show(Request $request)
    {
    	$bid_info = Item::where('items.id', $request->id)
    	->join('bids','bids.itemid','=','items.id')
    	->orderBy('bids.bidamount', 'desc')
	    ->get();
	    if(!empty($bid_info->all()))
	    {
	    	return response()->json(['id' => $bid_info->last()->id, 'name'=> $bid_info->last()->name, 'min_bid'=>$bid_info->last()->bidamount, 'highest_bid'=>$bid_info->first()->bidamount, 'highest_bid_user_id'=>$bid_info->first()->userid], 200);
	    }
	    return response()->json(['error' => 'There is no data available'], 404);
    	
    }
}
