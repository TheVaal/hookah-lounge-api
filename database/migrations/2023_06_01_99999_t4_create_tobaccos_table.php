<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class t4CreateTobaccosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tobaccos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('manufacturer_id')->unsigned();
            $table->bigInteger('hardness_id')->unsigned();
            $table->string('taste');
            $table->timestamps();
        });

        Schema::table('tobaccos', function (Blueprint $table) {
            $table->foreign('manufacturer_id')->references('id')->on('manufacturers');
            $table->foreign('hardness_id')->references('id')->on('hardnesses');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tobaccos');
    }
}
