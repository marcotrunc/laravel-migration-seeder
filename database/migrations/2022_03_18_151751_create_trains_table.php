<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('brand_name', '50');
            $table->string('departure', '100');
            $table->string('arrival', '100');
            $table->time('departure_time', '4');
            $table->time('arrival_time', '4');
            $table->char('code_train', 5);
            $table->tinyInteger('num_cariages')->unsigned()->nullable();
            $table->boolean('is_ontime');
            $table->boolean('is_deleted');
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
        Schema::dropIfExists('trains');
    }
}
