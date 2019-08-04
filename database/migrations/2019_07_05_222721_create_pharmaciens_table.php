<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePharmaciensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pharmaciens', function (Blueprint $table) {
            $table->bigIncrements('idP');
            $table->timestamps();
            $table->string('nomP');
            $table->string('prenomP');
            $table->string('dateNaissance');
            $table->string('telP');
            $table->string('emailP');
            $table->string('login');
            $table->string('password');
            $table->boolean('isAdmin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pharmaciens');
    }
}
