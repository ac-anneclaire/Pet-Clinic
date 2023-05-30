<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clients', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('client_name');
            // $table->unsignedBigInteger('appointment_id')->nullable();
            $table->string('address');
            $table->string('phone_number');
            $table->string('email_address');
            $table->timestamps();
            $table->softDeletes();


            // $table->foreign('appointment_id')->references('id')->on('appointments')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clients');
    }
}
