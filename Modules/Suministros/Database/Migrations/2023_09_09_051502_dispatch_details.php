<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dispatch_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dispatch');
            $table->unsignedBigInteger('supply');
            $table->integer('cantidad');
            $table->foreign('dispatch')->references('id')->on('dispatch');
            $table->foreign('supply')->references('id')->on('supplies');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('failed_jobs');
    }
};
