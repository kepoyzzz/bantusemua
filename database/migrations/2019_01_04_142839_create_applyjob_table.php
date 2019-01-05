<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplyjobTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apply_jobs', function (Blueprint $table) {
            $table->increments('applyjobID');
            $table->integer('id')->unsigned();
            $table->integer('userID')->unsigned();
            $table->string('JobName');
            $table->string('JobLocation');
            $table->string('JobSpecification');
            $table->string('JobGiver');
            $table->string('JobPhone');
            $table->string('JobEmail');
            $table->string('JobPicture');
            $table->timestamps();
            $table->foreign('id')->references('id')->on('jobs')->onDelete('cascade');
            $table->foreign('userID')->references('userID')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applyjob');
    }
}
