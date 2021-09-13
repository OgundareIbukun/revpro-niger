<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call(StatesTableSeeder::class);
        $this->call(LgasTableSeeder::class);
        $this->call(AgentTableSeeder::class);
        $this->call(ServiceTableSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(CorporateTaxPayerSeeder::class);
        $this->call(IndividualTaxPayerSeeder::class);
        $this->call(RangeTableSeeder::class);
        $this->call(RevenuePointSeeder::class);
    }
}
