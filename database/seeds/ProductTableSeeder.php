<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ProductTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('products')->truncate();
    	factory('CodeCommerce\Product',25)->create();
    }
}
