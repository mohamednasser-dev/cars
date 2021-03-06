<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTypeModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('type_models', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('image', 300);
            $table->string('title_en', 200);
            $table->string('title_ar', 200);
            $table->enum('deleted',['0','1'])->default('0');
            $table->bigInteger('marka_type_id')->unsigned()->nullable();
            $table->foreign('marka_type_id')->references('id')->on('marka_types')->onDelete('restrict');
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
        Schema::dropIfExists('type_models');
    }
}
