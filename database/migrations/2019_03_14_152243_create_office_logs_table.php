<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('office_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('senderAccount');
            $table->string('senderName');
            $table->string('officeName');
            $table->integer('officeAccount');
            $table->string('reciverName');
            $table->string('reciverID');
            $table->string('reciverPhone');
            $table->string('coin');
            $table->double('balance_before_fee');
            $table->double('balance_after_fee');
            $table->double('website_fee');
            $table->double('office_fee');
            $table->double('total_fee');
            $table->integer('status_id');
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
        Schema::dropIfExists('office_logs');
    }
}
