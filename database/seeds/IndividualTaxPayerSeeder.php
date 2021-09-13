<?php

use Illuminate\Database\Seeder;

class IndividualTaxPayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('individual_tax_payers')->insert([
            [  'name' => 'Mr Kola Adejola',
                'phone_no' => '09034456767',
                'email' => 'myemail@email.com',
                'identification' => 'Voter`s Card',
                'id_no' => '6738939030383003',


            ],

        ]);
    }
}
