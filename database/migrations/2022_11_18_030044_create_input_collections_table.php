<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateInputCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('input_collections', function (Blueprint $table) {
            $table->id();
            $table->double("device1")->nullable();
            $table->double("device2")->nullable();
            $table->double("device3")->nullable();
            $table->double("device4")->nullable();
            $table->double("device5")->nullable();
            $table->double("device6")->nullable();
            $table->double("device7")->nullable();
            $table->double("device8")->nullable();
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
        Schema::dropIfExists('input_collections');
    }
}
