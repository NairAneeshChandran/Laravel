<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
	protected $fillable = ['name'];
	protected $table = 'category';
	public $timestamps = false;
	/**
     * Scope a query to categories sorted by name.
     *
     * @param  \Illuminate\Database\Eloquent\Builder  $query
     * @return \Illuminate\Database\Eloquent\Builder
    */
    public function ScopeWithsorteditems($query)
    {
	    return $query->join('items', 'items.categoryid', '=', 'category.id')
                        ->addSelect('items.*','category.name as cat_name')
                        ->orderBy('category.name', 'asc')
                        ->orderBy('items.minprice', 'desc');

    }
    /*public function items()
    {
    	return $this->belongsToMany(Item::class);
	}*/
     
}
