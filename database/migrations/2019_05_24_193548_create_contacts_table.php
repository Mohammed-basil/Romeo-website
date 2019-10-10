<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
         $table->increments('id');
          $table->string('mail')->nullable();
         $table->string('facebook')->nullable();
         $table->string('twitter')->nullable();
         $table->string('instagram')->nullable();
         $table->string('linkedin')->nullable();
         $table->string('youtube')->nullable();
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
        Schema::dropIfExists('contacts');
    }
}
