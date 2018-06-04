<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rents', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('renter_contract_number');
            $table->dateTime('rent_at');
            $table->unsignedInteger('rental_days');
            $table->unsignedTinyInteger('type');
            $table->unsignedInteger('shelf_id')->nullable();

            $table->foreign('renter_contract_number')->references('contract_number')->on('renters')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('rents');
    }
}
