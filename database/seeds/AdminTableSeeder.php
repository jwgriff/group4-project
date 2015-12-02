<?php

use Illuminate\Database\Seeder;
use App\Models\Admin;
use Faker\Factory as Faker;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $adminIds = App\Models\User::all()->where('is_admin', 1)->lists('id');
        //echo('Investor Ids');
        //var_dump($investorIds);

        foreach($adminIds as $id) {
            //factory('App\Models\Investor', $id)->create();
            Admin::create([
                    'user_id' => $id,
                    'fname' => $faker->firstName,
                    'lname' => $faker->lastName,
                    'home_street' => $faker->streetAddress,
                    'home_city' => $faker->city,
                    'home_state' => $faker->state,
                    'home_zip' => $faker->postcode,
                    'home_phone' => $faker->phoneNumber,
                    'security_level' => $faker->numberBetween($min = 5, $max = 15)
                ]
            );
        }
    }
}
