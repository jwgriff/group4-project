<?php

use Illuminate\Database\Seeder;
use App\Models\Investor;
use Faker\Factory as Faker;

class InvestorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   /*
        Investor::create([
            'user_id' => 3,
            'profile_name' => 'Founder01 First Profile',
            'street' => '01 Main St.',
            'city' => 'Washington',
            'state' => 'DC',
            'zip' => '01010',
            'invst_objective' => 'Test Founder Table',
            'invst_amount_total' => 100.00

        ]);
        */

        $faker = Faker::create();
        $investorIds = App\Models\User::all()->where('is_investor', 1)->lists('id');
        var_dump($investorIds);

        foreach($investorIds as $id) {
            //factory('App\Models\Investor', $id)->create();
            Investor::create([
                    'user_id' => $id,
                    'fname' => $faker->firstName,
                    'lname' => $faker->lastName,
                    'profile_name' => $faker->colorName,
                    'street' => $faker->streetAddress,
                    'city' => $faker->city,
                    'state' => $faker->state,
                    'zip' => $faker->postcode,
                    'phone' => $faker->phoneNumber,
                    'invst_objective' => $faker->sentence(),
                    'invst_amount_total' => $faker->randomFloat($nbMaxDecimals = 2,
                                                                $min = 100.00,
                                                                $max = 100000.00)
                ]
            );
        }
    }
}
