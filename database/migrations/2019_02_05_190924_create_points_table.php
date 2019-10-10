<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->double('USD')->default(0);
            $table->double('NIS')->default(0);
            $table->double('SAR')->default(0);
            $table->double('EGP')->default(0);
            $table->double('EUR')->default(0);
            $table->double('JOD')->default(0);
            $table->double('TRY')->default(0);
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
        Schema::dropIfExists('points');
    }
}
