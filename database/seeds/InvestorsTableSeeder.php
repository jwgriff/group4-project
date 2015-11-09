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
    {

 /*
[ErrorException]
Argument 1 passed to Illuminate\Database\Grammar::parameterize() must be of the
type array, string given, called in /home/vagrant/group4-project/vendor/laravel/framework/
src/Illuminate/Database/Query/Grammars/Grammar.php on line 654 and defined

        foreach($investorIds as $id) {
            factory('App\Models\Investor',10, $id)->create();
        }
 */
        $faker = Faker::create();
        $investorIds = App\Models\User::all()->where('is_investor', 1)->lists('id');
        //echo('Investor Ids');
        //var_dump($investorIds);

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
