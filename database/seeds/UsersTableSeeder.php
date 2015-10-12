<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        App\User::create([
            'name' =>'admin01',
            'email' => 'admin01@gwu.edu',
            'password' => bcrypt('admin01'),
            'is_admin' => true,
        ]);
        App\User::create([
            'name' => 'founder01',
            'email' => 'founder01@gwu.edu',
            'password' => bcrypt('founder01'),
            'is_founder' => true,
        ]);
        App\User::create([
            'name' => 'investor01',
            'email' => 'investor01@gwu.edu',
            'password' => bcrypt('investor01'),
            'is_investor' => true,
        ]);
    }
}
