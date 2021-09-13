<?php

use Illuminate\Database\Seeder;

class CorporateTaxPayerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('corporate_tax_payers')->insert([
            [  'name' => 'dreamlabs Nig. Ltd',
                'category' => 'corporate',
                'sector' => 'large scale',
                'rc_no' => '12345678',
                'date_established' => '23-06-2009',
                'address' => 'No 56, Plaza Gudu road Abuja',
                'lga' => 'Gudu',
                'town' => 'Abuja',
                'staff_strength' => 20,
                'corporate_birs_no' => 'BIRS345678',
                'corporate_tin_no' => 'TIN87990399',
                'geolocation' => '89990.006,89900.878',
                'individual_tax_payer_id' => 1

            ],

        ]);
    }
}
