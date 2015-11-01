<?php

use Illuminate\Database\Seeder;
use App\Models\Founder;
use Faker\Factory as Faker;

class FoundersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $foundersIds = App\Models\User::all()->where('is_founder', 1)->lists('id');
        var_dump($foundersIds);

        foreach($foundersIds as $id) {
            //factory('App\Models\Investor', $id)->create();
            //TODO: change faker state to country
            Founder::create([
                    'user_id' => $id,
                    'company_name' => $faker->company,
                    'company_street' => $faker->streetAddress,
                    'company_city' => $faker->city,
                    'company_state' => $faker->state,
                    'company_zip' => $faker->postcode,
                    'company_phone' => $faker->phoneNumber,
                    'company_industry' => $faker->sentence(),
                    'company_mktcap' => $faker->numberBetween($min = 1000, $max = 1000000)
                ]
            );
        }

    }
}
