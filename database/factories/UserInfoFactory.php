<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\UserInfo;
use Faker\Generator as Faker;

$factory->define(UserInfo::class, function (Faker $faker) {
    return [
        'userName' => $faker->name,
        'email' => $faker->unique()->safeEmail,
        'password' => $faker->password,
        'account' => $faker->userName
    ];
});
