<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donations', function (Blueprint $table) {
            $table->increments('donationID');
            $table->string('donatePicture');
            $table->string('donateTitle');
            $table->string('requesterDonation');
            $table->integer('totalDonation');
            $table->integer('targetDonation');
            $table->date('donateTime');
            $table->string('descriptionDonation');
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
        Schema::dropIfExists('donations');
    }
}
