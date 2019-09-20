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
<<<<<<< HEAD
            $table->integer('achat_id')->unsigned();
            $table->integer('medicament_id');
=======
            $table->integer('achat_id')->nullable();
            $table->foreign('achat_id')->references('idA')->on('achats')->onDelete('cascade');
            $table->integer('medicament_id')->nullable();
            $table->foreign('medicament_id')->references('idM')->on('medicaments')->onDelete('cascade');
>>>>>>> 82ac3f60d3f26120b9933e4ef9cdd9868f0887b9
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
        Schema::dropIfExists('lots');
    }
}
