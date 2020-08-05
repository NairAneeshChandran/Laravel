<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sample;
use App\Item;
use App\Bid;
use App\Category;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
    return [
    	'categoryid' => $faker->randomDigit,
        'name' => $faker->text(5),
        'minprice' => $faker->randomDigit
        //'description' => $faker->text(200)
    ];
});
$factory->define(Category::class, function (Faker $faker) {
    return [
        'name' => $faker->text(5)
    ];
});
$factory->define(Bid::class, function (Faker $faker) {
    return [
    	'itemid' => $faker->randomDigit,
    	'userid' => $faker->randomDigit,
    	'bidamount' => $faker->randomDigit
    ];
});
