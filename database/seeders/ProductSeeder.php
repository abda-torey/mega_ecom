<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            ['name'=>'Samsung TV',
            'price'=>'23000',
            'category'=>'TV',
            'description'=>'Smart TV with remote touch sensor',
            'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F504966176954363812%2F&psig=AOvVaw3xDsFF_TvX-0qvrz89VdX3&ust=1626886737777000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJjZ_sKP8vECFQAAAAAdAAAAABAD'
],
['name'=>'Samsung s20',
'price'=>'23000',
'category'=>'mobile',
'description'=>'Smart phone  with ram of 16gb touch sensor',
'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jumia.co.ke%2Fgalaxy-s20-ultra-6.9-128gb-12gb-dual-sim-black-samsung-mpg262678.html&psig=AOvVaw1K4iT9d-J4-jWRqS7kZcd3&ust=1626888364139000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPDk6MqV8vECFQAAAAAdAAAAABAD'],
['name'=>'Galaxy  A71',
'price'=>'23000',
'category'=>'TV',
'description'=>'Smart phone  with ram of 16gb touch sensor',
'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.jumia.co.ke%2Fgalaxy-a71-6.7-8gb-ram-128gb-dual-sim-prism-crush-black-samsung-mpg224211.html&psig=AOvVaw1K4iT9d-J4-jWRqS7kZcd3&ust=1626888364139000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCPDk6MqV8vECFQAAAAAdAAAAABAJ'
],
['name'=>'Samsung TV',
'price'=>'23000',
'category'=>'TV',
'description'=>'Smart TV with remote touch sensor',
'gallery'=>'https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.pinterest.com%2Fpin%2F504966176954363812%2F&psig=AOvVaw3xDsFF_TvX-0qvrz89VdX3&ust=1626886737777000&source=images&cd=vfe&ved=0CAsQjRxqFwoTCJjZ_sKP8vECFQAAAAAdAAAAABAD'
]
        ]);
    }
}
