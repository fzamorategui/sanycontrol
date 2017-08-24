<?php namespace Zamora\Sany\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateLocationsTable extends Migration
{
    public function up()
    {
        Schema::create('zamora_sany_locations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('nombre');
            $table->string('calle');
            $table->string('num_ext')->nullable();
            $table->string('num_int')->nullable();
            $table->string('cp');
            $table->string('colonia');
            $table->string('delegacion');
            $table->string('estado');
            $table->string('calle1')->nullable();
            $table->string('calle2')->nullable();
            $table->timestamps();
        });
        Schema::create('zamora_sany_clients_locations', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('location_id');
            $table->integer('client_id');
            $table->primary(['client_id', 'location_id']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('zamora_sany_locations');
        Schema::dropIfExists('zamora_sany_clients_locations');
    }
}
