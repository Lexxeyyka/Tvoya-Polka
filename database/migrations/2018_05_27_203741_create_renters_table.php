<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRentersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renters', function (Blueprint $table) {
            $table->unsignedInteger('contract_number')->nullable(false);
            $table->string('lastname', 32);
            $table->string('firstname', 32);
            $table->string('middlename', 32);
            $table->string('login', 16);
            $table->string('password');
            $table->string('address');
            $table->unsignedInteger('phone_number');
            $table->primary(['contract_number']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('renters');
    }
}
