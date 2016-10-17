<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserTableSeeder extends Seeder
{
    public function run()
    {
    	DB::table('users')->truncate();
    	factory('CodeCommerce\User',5)->create();
    }
}
