<?php

use Illuminate\Database\Seeder;

class ExchangeRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\ExchangeRate::class, 5)->create();

    }
}
