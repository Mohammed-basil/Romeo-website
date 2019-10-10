<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExchangelogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('exchangelogs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('account_number');
            $table->string('from');
            $table->string('to');
            $table->double('sale');
            $table->double('buy');
            $table->double('amount_from');
            $table->double('amount_to');
            $table->string('operation');
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
        Schema::dropIfExists('exchangelogs');
    }
}
