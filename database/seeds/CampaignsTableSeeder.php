<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Campaign;

class CampaignsTableSeeder extends Seeder
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

        foreach($foundersIds as $fndId) {
            Campaign::create([
                'founder_id' => $fndId,
                'is_active' => $faker->boolean($chanceOfGettingTrue = 95),
                'campaign_name' => $faker->numerify('Campaign ###'),
                'description' => $faker->paragraph,
                //'campaign_image' => $faker->streetAddress,
                'start_date' => $faker->dateTimeBetween($startDate = '-1 month',
                                                        $endDate = 'now'),
                'end_date' => $faker->dateTimeBetween($startDate = '+7 days',
                                                        $endDate = '+2 months'),
                'target_goal' => $faker->randomFloat($nbMaxDecimals = 2,
                    $min = 100.00,
                    $max = 10000.00),
                'target_current' => $faker->randomFloat($nbMaxDecimals = 2,
                    $min = 10.00,
                    $max = 5000.00),
                'acct_number' => $faker->creditCardNumber()

            ]);
        }
        /*
        $investorIds = App\Models\User::all()->where('is_investor', 1)->lists('id');
        var_dump($investorIds);

        foreach($investorIds as $invtrId) {
            Campaign::updateOrCreate([

            ]);
        }
        */




    }
}
