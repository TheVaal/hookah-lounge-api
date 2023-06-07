<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class t90CreateSessionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->id();
            $table->string("accessCode");
            $table->bigInteger("owner_id")->unsigned();
            $table->bigInteger('lounge_id')->unsigned();
            $table->string("status"); // BD - Booked, PO - preordered, CN - Canceled, PD - Paid
            $table->datetime("booking_date"); 
            $table->timestamps();
        });

        Schema::table('sessions', function (Blueprint $table) {
            
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
        Schema::dropIfExists('sessions');
    }
}
