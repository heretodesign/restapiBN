<?php

use Illuminate\Database\Seeder;

class ConsumerAlertTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\ConsumerAlert::class, 5)->create();

    }
}
