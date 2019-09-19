<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table) {
            $table->bigIncrements('idV');
            $table->timestamps();
            $table->integer('lot_id')->nullable();
            $table->foreign('lot_id')->references('idL')->on('lots')->onDelete('cascade');
            $table->integer('pharmacien_id')->nullable();
            $table->foreign('pharmacien_id')->references('idP')->on('pharmaciens')->onDelete('cascade');
            $table->date('dateV');
            $table->integer('qt');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ventes');
    }
}
