<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaseRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('base_rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bank_code');
            $table->string('bank_name');
            $table->decimal('base_rate', 5, 4);
            $table->decimal('indicative_eff_lending_rate', 5, 4);
            $table->decimal('base_lending_rate', 5, 4);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('base_rates');
    }
}
