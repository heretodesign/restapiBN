<?php

use Illuminate\Database\Seeder;

class InterestRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\InterestRate::class, 5)->create();
    }
}
