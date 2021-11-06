<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSlidesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slides', function (Blueprint $table) {
            $table->id();
            $table->string('plantilla');
            $table->string('path_image1');
            $table->string('path_image2');
            $table->string('path_image3');
            $table->string('path_image4');
            $table->string('layer1');
            $table->string('layer2');
            $table->string('layer3');
            $table->string('layer4');
            $table->string('btn1');
            $table->string('btn2');
            $table->string('btn3');
            $table->string('btn4');
            $table->string('state');
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
        Schema::dropIfExists('slides');
    }
}
