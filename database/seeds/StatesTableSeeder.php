<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->insert([
            ['name' => 'Abia'],
            ['name' => 'Adamawa'],
            ['name' => 'Akwa ibom'],
            ['name' => 'Anambra'],
            ['name' => 'Bauchi'],
            ['name' => 'Bayelsa'],
            ['name' => 'Benue'],
            ['name' => 'Borno'],
            ['name' => 'Cross river'],
            ['name' => 'Delta'],
            ['name' => 'Ebonyi'],
            ['name' => 'Edo'],
            ['name' => 'Ekiti'],
            ['name' => 'Enugu'],
            ['name' => 'Fct'],
            ['name' => 'Gombe'],
            ['name' => 'Imo'],
            ['name' => 'Jigawa'],
            ['name' => 'Kaduna'],
            ['name' => 'Kano'],
            ['name' => 'Katsina'],
            ['name' => 'Kebbi'],
            ['name' => 'Kogi'],
            ['name' => 'Kwara'],
            ['name' => 'Lagos'],
            ['name' => 'Nasarawa'],
            ['name' => 'Niger'],
            ['name' => 'Ogun'],
            ['name' => 'Ondo'],
            ['name' => 'Osun'],
            ['name' => 'Oyo'],
            ['name' => 'Plateau'],
            ['name' => 'Rivers'],
            ['name' => 'Sokoto'],
            ['name' => 'Taraba'],
            ['name' => 'Yobe'],
            ['name' => 'Zamfara'],
        ]);
    }
}