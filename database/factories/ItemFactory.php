<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Item;
// use App\Model;
use Faker\Generator as Faker;

$factory->define(Item::class, function (Faker $faker) {
	return [
		'nama' => $faker->sentence,
		'description' => $faker->paragraph,
		'price' => $faker->numberBetween(0, 100000),
		'is_acitve' => $faker->boolean
	];
});
