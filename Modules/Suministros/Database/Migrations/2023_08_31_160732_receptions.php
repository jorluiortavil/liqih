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
    public function up(): void
    {
        Schema::create('receptions', function (Blueprint $table) {
            $table->id();
            $table->string('concepto');
            $table->string('tipo');
            $table->date('fecha');
            $table->string('nota')->nullable();
            $table->integer('responsable');
            $table->string('proveedor');
            $table->string('observacion')->nullable();
            $table->string('status')->default('ABIERTO');
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
        Schema::dropIfExists('failed_jobs');
    }
};
