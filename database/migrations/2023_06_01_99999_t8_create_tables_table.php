<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class t8CreateTablesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tables', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('lounge_id')->unsigned();
            $table->bigInteger('seats')->default(1);            
            $table->timestamps();
        });

        Schema::table('tables', function (Blueprint $table) {
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
        Schema::dropIfExists('tables');
    }
}
