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
<<<<<<< HEAD
=======
            $table->foreign('lot_id')->references('idL')->on('lots')->onDelete('cascade');
>>>>>>> 82ac3f60d3f26120b9933e4ef9cdd9868f0887b9
            $table->integer('pharmacien_id')->nullable();
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
