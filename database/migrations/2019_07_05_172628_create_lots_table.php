<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lots', function (Blueprint $table) {
            $table->bigIncrements('idL');
            $table->timestamps();
            $table->integer('achat_id')->nullable();
            $table->foreign('achat_id')->references('idA')->on('achats')->onDelete('cascade');
            $table->integer('medicament_id')->nullable();
            $table->foreign('medicament_id')->references('idM')->on('medicaments')->onDelete('cascade');
            $table->date('date_fab');
            $table->date('date_per');
            $table->double('prix');
            $table->integer('qt_achetee')->nullable();
            $table->integer('qt_stock')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lots');
    }
}
