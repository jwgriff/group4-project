<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(UsersTableSeeder::class);
        $this->call(InvestorsTableSeeder::class);
        $this->call(FoundersTableSeeder::class);
        $this->call(CampaignsTableSeeder::class);
        $this->call(CampaignInvestorPTableSeeder::class);


        Model::reguard();
    }
}
