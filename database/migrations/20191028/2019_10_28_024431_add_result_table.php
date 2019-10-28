<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddResultTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Result', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nameCh')
                ->comment('中文姓名');
            $table->string('nameEn')
                ->comment('英文姓名');
            $table->tinyInteger('age');
            $table->tinyInteger('gender')
                ->comment('1:男性,2:女性');
            $table->dateTime('birthday');
            $table->string('tel', 10);
            $table->string('email');
            $table->string('departmentCode', 10)
                ->comment('部門代碼');
            $table->string('staffId', 30);

            $table->integer('sum')
                ->comment('回答總題數');
            $table->integer('yesSum')
                ->comment('答對題數');
            $table->integer('noSum')
                ->comment('答錯題數');
            $table->integer('score')
                ->comment('分數');
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
        Schema::dropIfExists('Result');
    }
}
