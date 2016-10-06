<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('category/{category}', function (\CodeCommerce\Category $category){
	$rCategory  = "Id: ".$category->id."<br />";
	$rCategory .= "Name: ".$category->name."<br />";
	$rCategory .= "Description: ".$category->description;

	return $rCategory;
});

#Route::get('categories', 'CategoriesController@index');

Route::group(['prefix' => 'admin'], function(){
	Route::get('categories', 'AdminCategoriesController@index');
	Route::get('products', 'AdminProductsController@index');
});