<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'name' =>'admin01',
            'email' => 'admin01@gwu.edu',
            'password' => bcrypt('admin01'),
            'is_admin' => true,
            'is_active' => true
        ]);
        User::create([
            'name' => 'founder01',
            'email' => 'founder01@gwu.edu',
            'password' => bcrypt('founder01'),
            'is_founder' => true,
            'is_active' => true
        ]);
        User::create([
            'name' => 'investor01',
            'email' => 'investor01@gwu.edu',
            'password' => bcrypt('investor01'),
            'is_investor' => true,
            'is_active' => true
        ]);
        factory('App\Models\User',10)->create();
    }
}
