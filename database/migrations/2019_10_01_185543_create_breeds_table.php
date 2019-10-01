<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBreedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('breeds', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('adaptability')->nullable();
            $table->integer('affection_level')->nullable();
            $table->integer('child_friendly')->nullable();
            $table->text('description')->nullable();
            $table->integer('energy_level')->nullable();
            $table->string('name')->nullable();
            $table->jsonb('weight')->nullable();
            $table->integer('stranger_friendly')->nullable();
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
        Schema::dropIfExists('breeds');
    }
}
