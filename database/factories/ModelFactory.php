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
    //echo $choose.' ';
    if ($choose == 1) {
        $userType = 'is_admin';
    } else if ($choose == 2 || $choose == 5) {
        $userType = 'is_founder';
    } else {
        $userType = 'is_investor';
    }
    //echo $userType.'  ';
    return [
        'name' => $faker->userName,
        'email' => $faker->email,
        'password' => bcrypt(str_random(10)),
        'is_admin' => ($userType== 'is_admin'? true : false),//($var > 2 ? true : false)
        'is_founder' => ($userType== 'is_founder'? true : false),
        'is_investor' => ($userType== 'is_investor'? true : false),
        'is_active' => $faker->boolean($chanceOfGettingTrue = 95),
        'remember_token' => str_random(10),
    ];
});

    $factory->define(App\Models\Investor::class, function (Faker\Generator $faker, $id){

    //$investorIds = App\Models\User::all()->where('is_investor', 1)->lists('id');
    //echo $investorIds->all();
    //foreach($investorIds as $id){
        //var_dump($investorIds);
        return [
            'user_id' => $id,
            'profile_name' => $faker->colorName,
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->country,
            'zip' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'invst_objective' => $faker->sentence(),
            'invst_amount_total' => $faker->randomFloat(2, 100.00, 100,000.00)

        ];
    //}


});

$factory->define(App\Models\Founder::class, function (Faker\Generator $faker, $id){

    //$founderIds = App\Models\User::all()->where('is_founder', 1)->lists('id');
    //echo $founderIds->all();
    //foreach($founderIds as $id){
    //var_dump($founderIds);
    return [
        'user_id' => $id,
        'company_name' => $faker->company,
        'company_street' => $faker->streetAddress,
        'company_city' => $faker->city,
        'company_state' => $faker->country,
        'company_zip' => $faker->postcode,
        'company_phone' => $faker->phoneNumber,
        'company_industry' => $faker->sentence(),
        'company_mktcap' => $faker->numberBetween($min = 1000, $max = 1000000)

    ];
    //}
});

/*
    $factory->define(App\Models\Investor::class, function (Faker\Generator $faker){

    $investorIds = App\Models\User::all()->where('is_investor', 1)->lists('id');
    //var_dump($investorIds);

    $investorListArray = array();

    foreach($investorIds as $id){
        array_push($investorListArray, [
            'user_id' => $id,
            'profile_name' => $faker->colorName,
            'street' => $faker->streetAddress,
            'city' => $faker->city,
            'state' => $faker->country,
            'zip' => $faker->postcode,
            'phone_number' => $faker->phoneNumber,
            'invst_objective' => $faker->sentence(),
            'invst_amount_total' => $faker->randomFloat(2, 100.00, 100,000.00)

        ]);

    }
    //print_r($investorListArray);

    return $investorListArray;

});
 */
