<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class t91CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('lounge_id')->unsigned();
            $table->bigInteger('table_id')->unsigned();
            $table->bigInteger('session_id')->unsigned();
            $table->double('sum')->default(0.0);
            $table->string('status'); //O - Opened, B - Billed, P - Paid, C - Canceled
            $table->boolean('closed')->default(false);            
            $table->timestamps();
        });
        
        Schema::table('orders', function (Blueprint $table) {
            $table->foreign('lounge_id')->references('id')->on('lounges');
            $table->foreign('table_id')->references('id')->on('tables');
            $table->foreign('session_id')->references('id')->on('sessions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
