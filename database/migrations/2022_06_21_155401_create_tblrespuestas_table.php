<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblrespuestas', function (Blueprint $table) {
            $table->id('idRespuesta');
            $table->integer('cvePregunta');
            $table->text('desRespuesta',500);
            $table->char('correcta')->default(1);
            $table->char('activo',1);            
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
        Schema::dropIfExists('respuestas');
    }
};
