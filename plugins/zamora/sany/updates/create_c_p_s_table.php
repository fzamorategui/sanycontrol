<?php namespace Zamora\Sany\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateCPSTable extends Migration
{
    public function up()
    {
        Schema::create('zamora_sany_c_p_s', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('zamora_sany_c_p_s');
    }
}
