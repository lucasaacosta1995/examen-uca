<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComisionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comisiones', function (Blueprint $table) {
            $table->bigIncrements('id')->unique();
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->integer('curso_id');
            $table->integer('catedra_id');
            $table->enum('turno',["M","T","N"]);
            $table->enum('semestre',["1","2"]);
            $table->string('anio',5);
            $table->softDeletes();
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
        Schema::dropIfExists('comisiones');
    }
}
