<?php

use Illuminate\Database\Seeder;

class SamplesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Item::class,1)->create();
        factory(App\Category::class,1)->create();
        factory(App\Bid::class,1)->create();
    }
}
