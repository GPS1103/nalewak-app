<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMillionerQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('millioner_questions', function (Blueprint $table) {
            $table->id();
            $table->string('question');
            $table->string('anwser1');
            $table->string('anwser2');
            $table->string('anwser3');
            $table->string('anwser4');
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
        Schema::dropIfExists('millioner_questions');
    }
}
