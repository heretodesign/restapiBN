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
        $this->call(KlUsdReferenceRate::class);
        $this->call(InterestRate::class);
        $this->call(ConsumerAlert::class);
        $this->call(ExchangeRate::class);
        $this->call(BaseRate::class);
        $this->call(Rate::class);
    }
}
