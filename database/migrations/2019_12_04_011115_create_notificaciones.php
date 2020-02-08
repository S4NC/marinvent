<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotificaciones extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('notificaciones', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('concepto');
            
            $table->unsignedBigInteger('useremite_id');
            $table->foreign('useremite_id')->references('id')->on('users');
            $table->unsignedBigInteger('userrecibe_id');
            $table->foreign('userrecibe_id')->references('id')->on('users');
            
            $table->unsignedBigInteger('tiponotificacion_id');
            $table->foreign('tiponotificacion_id')->references('id')->on('tipos_notificaciones');


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
        Schema::dropIfExists('notificaciones');
    }
}
