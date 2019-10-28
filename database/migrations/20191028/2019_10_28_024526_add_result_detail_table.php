<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResultDetailTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ResultDetail', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('questionId');
            $table->string('userAns', 1)
                ->comment('使用者的答案');
            $table->string('yesAns', 1)
                ->comment('正解');
            $table->string('isCorrect', 1)
                ->comment('使用者是否答對');
            $table->integer('resultId');
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
        Schema::dropIfExists('ResultDetail');
    }
}
