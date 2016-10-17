<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class CategoryTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('categories')->truncate();
    	factory('CodeCommerce\Category',10)->create();
    }
}
