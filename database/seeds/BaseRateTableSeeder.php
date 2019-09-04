<?php

use Illuminate\Database\Seeder;

class BaseRateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\BaseRate::class, 5)->create();

    }
}
