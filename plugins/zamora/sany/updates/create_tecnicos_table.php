<?php namespace Zamora\Sany\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateTecnicosTable extends Migration
{
    public function up()
    {
        Schema::create('zamora_sany_tecnicos', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('a_paterno');
            $table->string('a_materno')->nullable();
            $table->string('numero_empleado')->nullable();
            $table->text('direccion')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zamora_sany_tecnicos');
    }
}
