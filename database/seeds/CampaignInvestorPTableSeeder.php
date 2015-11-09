<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Campaign;
use App\Models\Investor;

class CampaignInvestorPTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $investorIds = App\Models\Investor::all()->lists('id');
        //echo('Investor Ids ');
        //var_dump($investorIds);

        $campaignIds = App\Models\Campaign::all()->lists('id');
        //echo('Campaign Ids ');
        //var_dump($campaignIds);

        $numberInvstPerCmpg = 3;

        foreach($investorIds as $invtId) {

            foreach($campaignIds as $cmpgnId) {

                DB::table('campaign_investor')->insert( [
                    'campaign_id' => $cmpgnId,//$faker->unique()->randomElement($campaignIds),
                    'investor_id' => $invtId,
                    'invst_label' => $faker->sentence(),
                    'invst_amount' => $faker->randomFloat($nbMaxDecimals = 2,
                        $min = 10.00,
                        $max = 500.00),
                    'created_at' => \Carbon\Carbon::now(),
                    'updated_at' => \Carbon\Carbon::now(),
                ]);
                //$numberInvstPerCmpg--;
            }
        }
        //var_dump($pivots);
        //DB::table('campaign_investor')->insert($pivots);
    }
}
