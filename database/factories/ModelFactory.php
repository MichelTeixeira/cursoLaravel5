<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

#User
$factory->define(CodeCommerce\User::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => bcrypt(str_random(10)),
        'remember_token' => str_random(10),
    ];
});

#Category
$factory->define(CodeCommerce\Category::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
        'description' => $faker->sentence
    ];
});

#Product
$factory->define(CodeCommerce\Product::class, function (Faker\Generator $faker) {
    return [
        'name' => $faker->word,
		'description' => $faker->sentence,
		'price' => $faker->randomFloat(2),
		'featured' => $faker->boolean,
		'recommend' => $faker->boolean,
        'category_id' => $faker->numberBetween(1,10),
    ];
});
