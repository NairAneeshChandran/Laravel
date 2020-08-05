<?php

namespace Tests\Feature\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FirstTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    /*
    Test the First API.
    */
    public function testFirst()
    {
        $Data = [
            "categoryid" => "4",
            "name" => "del",
            "minprice" => "10"
        ];
        $this->json('POST', 'api/item',$Data,['Accept' => 'application/json'])
            ->assertStatus(422)
            ->assertJson([
                'categoryid' => ['The categoryid field is required.'],
                'name' => ['The name field is required.'],
                'minprice' => ['The minprice field is required.'],
            ]);
    }
    public function testSecond()
    {
        $this->json('GET', 'api/categories')
            ->assertStatus(422);
    }
    public function testThird()
    {
        $Data = [
            "itemid" => "4",
            "userid" => "1",
            "bidamount" => "10"
        ];
        $this->json('POST', 'api/bid',$Data,['Accept' => 'application/json'])
            //->assertStatus(422)
            ->assertJson([
                'itemid' => ['The itemid field is required.'],
                'userid' => ['The userid field is required.'],
                'bidamount' => ['The bidamount field is required.'],
            ]);
    }
    public function testFourth()
    {
        $Data = [
            "id" => "4"
        ];
        $this->json('POST', 'api/items',$Data,['Accept' => 'application/json'])
            ->assertStatus(422)
            ->assertJson([
                'id' => ['The id field is required.'],
            ]);
    }
}
