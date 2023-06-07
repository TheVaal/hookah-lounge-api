<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class t6CreateLoungeTobaccosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lounge_tobaccos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lounge_id')->unsigned();
            $table->bigInteger('tobacco_id')->unsigned();
            $table->bigInteger('price');
            $table->timestamps();
        });

        Schema::table('lounge_tobaccos', function (Blueprint $table) {
            $table->foreign('tobacco_id')->references('id')->on('tobaccos');
            
            $table->foreign('lounge_id')->references('id')->on('lounges');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lounge_tobaccos');
    }
}
