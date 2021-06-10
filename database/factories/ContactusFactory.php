<?php


/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Contactus;
use Faker\Generator as Faker;

//假資料工廠，用來製作更逼真的假資料，再用播種機seeds執行我們的工廠
$factory->define(Contactus::class, function (Faker $faker) {
    return [
        //
        'name' => $faker->name,
        'email' => $faker->email,
        'phone' => $faker->phoneNumber,
        'content' => $faker->realText(30),
        // 'content' => $faker->realText(最多能幾個字)
    ];
});
