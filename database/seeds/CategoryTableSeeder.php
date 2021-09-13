<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            [  'code' => '5001', 'name' => 'Revenue'],
            [ 'code' => '5002', 'name' => 'Agriculture'],
            [ 'code' => '5003', 'name' => 'Works and Transport'],
            [ 'code' => '5004', 'name' => 'Education and Social Development'],
            [ 'code' => '5005', 'name' => 'Primary Health Care'],
            [ 'code' => '5006', 'name' => 'Finance'],
            [ 'code' => '5007', 'name' => 'Land'],
            [ 'code' => '5008', 'name' => 'Administration']
        ]);
    }
}
