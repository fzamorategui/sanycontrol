<?php namespace Zamora\Sany\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateServicesTable extends Migration
{
    public function up()
    {
        Schema::create('zamora_sany_services', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->integer('client_id');
            $table->integer('location_id');
            $table->integer('numero_servicio');
            $table->integer('total_servicios');
            $table->date('proximo_servicio');
            $table->date('fecha_inicio');
            $table->date('fecha_termino');
            $table->text('plaga');
            $table->text('otra_plaga')->nullable();
            $table->text('otro_servicio')->nullable();
            $table->text('productos')->nullable();
            $table->text('costo')->nullable();
            $table->text('areas')->nullable();
            $table->text('observaciones')->nullable();
            $table->text('responsable')->nullable();
            $table->text('tecnico')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zamora_sany_services');
    }
}
