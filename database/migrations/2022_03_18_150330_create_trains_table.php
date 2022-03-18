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
            $table->string('agency', 30);
            $table->string('departure_station', 40);
            $table->string('arrival_station', 40);
            $table->string('departure_time', 20);
            $table->string('arrival_time', 20);
            $table->smallInteger('train_code');
            $table->smallInteger('carreges')->nullable();
            $table->boolean('on_time')->default(1);
            $table->boolean('deleted')->default(1);
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
