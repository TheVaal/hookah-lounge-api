<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class t93CreateHookahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hookahs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('mix_id')->unsigned();
            $table->double('weight')->default(0.0);
            $table->bigInteger('lounge_tobacco_id')->unsigned();
            $table->timestamps();
        });
        Schema::table('hookahs', function (Blueprint $table) {
            $table->foreign('lounge_tobacco_id')->references('id')->on('lounge_tobaccos');
            $table->foreign('mix_id')->references('id')->on('mixes');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hookahs');
    }
}
