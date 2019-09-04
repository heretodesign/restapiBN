<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rates', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('exchange_rates_id')->unsigned();
            $table->date('date');
            $table->decimal('buying_rate', 5, 4);
            $table->decimal('selling_rate', 5, 4);
            $table->decimal('middle_rate', 5, 4);
            $table->foreign('exchange_rates_id')
              ->references('id')->on('exchange_rates')
              ->onDelete('cascade');
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
        Schema::dropIfExists('rates');
    }
}
