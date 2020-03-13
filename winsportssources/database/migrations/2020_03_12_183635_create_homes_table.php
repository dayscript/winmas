<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHomesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('home', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('banner_1');
            $table->text('banner_2');
            $table->text('banner_3');
            $table->text('banner_4');
            $table->text('banner_5');
            $table->text('question_1');
            $table->text('question_2');
            $table->text('question_3');
            $table->text('question_4');
            $table->text('question_5');
            $table->text('question_6');
            $table->text('answer_1');
            $table->text('answer_2');
            $table->text('answer_3');
            $table->text('answer_4');
            $table->text('answer_5');
            $table->text('answer_6');
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
        Schema::dropIfExists('home');
    }
}
