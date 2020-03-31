<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDuasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('duas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->tinyInteger('weigh')->default(0);
            $table->tinyInteger('status')->default(1);
            $table->text('title');
            $table->text('arabic');
            $table->text('translation');
            $table->text('transliteration')->nullable();
            $table->text('reference')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('duas');
    }
}
