<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class t7CreateLoungeMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lounge_menus', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('menu_id')->unsigned();
            $table->bigInteger('lounge_id')->unsigned();
            $table->double('price');
            $table->timestamps();
        });

        Schema::table('lounge_menus', function (Blueprint $table) {
            $table->foreign('menu_id')->references('id')->on('menus');
            
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
        Schema::dropIfExists('lounge_menus');
    }
}
