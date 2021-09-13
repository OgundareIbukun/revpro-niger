<?php

use Illuminate\Database\Seeder;

class RevenuePointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //


        DB::table('revenue_points')->insert(
            [
                'name' => 'Oja Oba Market',
                'type'=>'Market',
                'state_id' => 1,
                'lga_id' => 1
            ],

            [
                'name' => 'Post Office',
                'type'=>'Control Post',
                'state_id' => 1,
                'lga_id' => 1
            ]


        );
    }

}
