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
        Schema::create('supplies', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('codigo');
            $table->string('nombre');
            $table->string('principio')->nullable();
            $table->integer('unidades');
            $table->string('presentacion');
            $table->string('formula')->nullable();
            $table->string('administración')->nullable();
            $table->string('laboratorio');
            $table->string('farmacopedia')->nullable();
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
