<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuestionCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('question_comments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('comment');
            $table->unsignedBigInteger("question_id");
            $table->foreign('question_id')->references('question_id')->on('questions');
            $table->unsignedBigInteger('profile_id');
            $table->foreign('profile_id')->references('profile_id')->on('profiles');
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
        Schema::dropIfExists('question_comments');
    }
}
