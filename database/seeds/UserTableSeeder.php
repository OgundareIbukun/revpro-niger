<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name' => 'Najeeb Abubakar',
                'email' => 'admin@revenue.ng',
                'phone' => '08066579703',
                'password' => bcrypt('password'),
                'userable_id' => 1,
                'userable_type' => 'App\\Admin'
            ],
            [
                'name' => 'agent',
                'email' => 'agent@revenue.ng',
                'phone' => '08012345678',
                'password' => bcrypt('password'),
                'userable_id' => 1,
                'userable_type' => 'App\\Agent'
            ],
        ]);
    }
}
