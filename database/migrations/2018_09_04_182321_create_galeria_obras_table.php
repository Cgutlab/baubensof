<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGaleriaObrasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('galeria_obras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orden')->nullable();
            $table->string('file_image')->default('no-image.jpg')->nullable();
            $table->unsignedInteger('obra_id');
            $table->foreign('obra_id')->references('id')->on('obras')->onDelete('cascade');
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
        Schema::dropIfExists('galeria_obras');
    }
}
