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
        Schema::create('reception_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('reception');
            $table->unsignedBigInteger('supply');
            $table->integer('cantidad');
            $table->string('lote');
            $table->date('caducidad');
            $table->timestamps();
            $table->foreign('reception')->references('id')->on('receptions');
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
