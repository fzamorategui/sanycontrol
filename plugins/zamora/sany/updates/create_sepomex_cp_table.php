<?php namespace Zamora\Sany\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateSepomexesCPTable extends Migration
{
    public function up()
    {
        Schema::create('zamora_sany_cp', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('d_codigo')->nullable();
            $table->text('d_asenta')->nullable();
            $table->string('d_tipo_asenta')->nullable();
            $table->string('D_mnpio')->nullable();
            $table->string('d_estado')->nullable();
            $table->string('d_CP')->nullable();
            $table->string('c_estado')->nullable();
            $table->string('d_ciudad')->nullable();
            $table->string('c_oficina')->nullable();
            $table->string('c_CP')->nullable();
            $table->string('c_tipo_asenta')->nullable();
            $table->string('c_mnpio')->nullable();
            $table->string('id_asenta_cpcons')->nullable();
            $table->string('d_zona')->nullable();
            $table->string('c_cve_ciudad')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zamora_sany_cp');
    }
}
