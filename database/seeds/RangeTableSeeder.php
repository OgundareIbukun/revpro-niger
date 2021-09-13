<?php

use Illuminate\Database\Seeder;

class RangeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('ranges')->insert([
            [  'name' => 'Small','price' => 2000,'frequency'=>'Annual',  'service_id'=>6  ],
            [    'name' => 'Medium','price' => 5000,'frequency'=>'Annual',  'service_id'=>6  ],
            [    'name' => 'Big','price' => 10000,'frequency'=>'Annual', 'service_id'=>6  ],

            [  'name' => 'Individual','price' => 300,'frequency'=>'Annual',  'service_id'=>32  ],
            [    'name' => 'Group','price' => 2000,'frequency'=>'Annual',  'service_id'=>32  ],

            [  'name' => 'Roller','price' => 3500,'frequency'=>'Monthly',  'service_id'=>60  ],
            [    'name' => 'Grader','price' =>70000,'frequency'=>'Monthly',  'service_id'=>60  ],
            [  'name' => 'Caterpillar','price' =>90000,'frequency'=>'Annual',  'service_id'=>60  ],
            [    'name' => 'Damper','price' => 90000,'frequency'=>'Monthly',  'service_id'=>60  ],
            [  'name' => 'Perl loader','price' => 90000,'frequency'=>'Monthly',  'service_id'=>60  ],
            [    'name' => 'Perl loader','price' =>100000,'frequency'=>'Monthly',  'service_id'=>60  ],

            [  'name' => 'New Bus','price' => 4000,'frequency'=>'Daily',  'service_id'=>61  ],
            [    'name' => 'Medium Bus','price' => 3000,'frequency'=>'Daily',  'service_id'=>61  ],
            [  'name' => 'Old Bus','price' => 2000,'frequency'=>'Daily',  'service_id'=>61  ],

            [    'name' => '3 and 4 bedrooms','price' =>0.5,'frequency'=>'Annual',  'service_id'=>105  ],
            [  'name' => '1 and 2 bedrooms ','price' =>0.5,'frequency'=>'Annual',  'service_id'=>105  ],

            [    'name' => 'Canopy','price' =>1000,'frequency'=>'',  'service_id'=>106  ],
            [  'name' => 'Chair','price' =>50,'frequency'=>'',  'service_id'=>106  ],


            [  'name' => 'Cat A.( 20,000-999,999 )','price' =>3500,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat B.( 1,000,000-25,999,999)','price' =>7000,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat C.(26,000,000-50,999,999) ','price' =>10500,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat D.(51,000,000-100,999,999) ','price' =>14000,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat E.(101,000,000-500,999,999)','price' =>17000,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat F.(501,000,000-999,999,999)','price' =>21000,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat G.(1,000,000,000-2,999,999,999)','price' =>25000,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat H.(3,000,000,000-5,000,000,000)','price' =>50000,'frequency'=>'',  'service_id'=>145  ],
            [  'name' => 'Cat I.(5,000,000,001-Above)','price' =>65000,'frequency'=>'',  'service_id'=>145  ],


            [  'name' => 'Cat A.(50,000 -1,000,000)','price' =>2000,'frequency'=>'Annual',  'service_id'=>146  ],
            [  'name' => 'Cat B.(1,000,001 - 5,000,000)','price' =>5000,'frequency'=>'Annual',  'service_id'=>146  ],
            [  'name' => 'Cat C.( 5,000,001- above)','price' =>10000,'frequency'=>'Anual',  'service_id'=>146  ],

        ]);
    }
}
