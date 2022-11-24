<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Proyectos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        return;
        Schema::create('proyectos', function (Blueprint $table) {
            $table->bigIncrements('id');
            
            $table->string('nombre');
            $table->string('imagen');
            $table->string('descripcion');
            $table->string('url');
            $table->string('imagensec');

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
        //
    }
}
