<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnagraficasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('anagraficas', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name', 45)->nullable();
            $table->string('familyname', 45)->nullable();
            $table->string('gender', 45)->nullable();
            $table->string('codicefiscale', 45)->nullable();
            $table->string('statodinascita', 45)->nullable();
            $table->string('Datadinascita', 45)->nullable();
            $table->string('Comunedinascita', 45)->nullable();
            $table->string('Cellulare', 45)->nullable();
            $table->string('email', 45)->nullable();
            $table->string('Pec', 45)->nullable();
            $table->string('RESIDENZA', 45)->nullable();
            $table->string('DOMICILIO', 45)->nullable();

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
        Schema::dropIfExists('anagraficas');
    }
}
