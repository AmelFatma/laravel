<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lot', function (Blueprint $table) {
            $table->bigIncrements('idL');
            $table->timestamps();
            $table->integer('achat_id');
            $table->integer('medicament_id');
            $table->date('date_fab');
            $table->date('date_per');
            $table->double('prix');
            $table->integer('qt_achetee');
            $table->integer('qt_stock');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lot');
    }
}
