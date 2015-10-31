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

$factory->define(App\Models\User::class, function (Faker\Generator $faker) {
    $userType = "";
    $choose =  $faker->randomDigitNotNull;
    echo $choose.' ';
    if ($choose == 1) {
        $userType = 'is_admin';
    } else if ($choose == 2 || $choose == 5) {
        $userType = 'is_founder';
    } else {
        $userType = 'is_investor';
    }
    echo $userType.'  ';
    return [
        'name' => $faker->name,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'is_admin' => ($userType== 'is_admin'? true : false),//($var > 2 ? true : false)
        'is_founder' => ($userType== 'is_founder'? true : false),
        'is_investor' => ($userType== 'is_investor'? true : false),
        'remember_token' => str_random(10),
    ];
});
