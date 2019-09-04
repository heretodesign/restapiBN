<?php

use Illuminate\Database\Seeder;

class KlUsdReferenceRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\KlUsdReferenceRate::class, 10)->create();
    }
}
