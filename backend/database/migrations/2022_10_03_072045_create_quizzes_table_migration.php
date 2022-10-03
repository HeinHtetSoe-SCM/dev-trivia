<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuizzesTableMigration extends Migration
{
    public function up()
    {
        Schema::create('quizzes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('position', false, true);
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('quizzes')
                ->onDelete('set null');
                $table->string('title');
                $table->integer('status')->nullable();
                $table->timestamps();

        });

        Schema::create('quiz_closure', function (Blueprint $table) {
            $table->increments('closure_id');

            $table->integer('ancestor', false, true);
            $table->integer('descendant', false, true);
            $table->integer('depth', false, true);

            $table->foreign('ancestor')
                ->references('id')
                ->on('quizzes')
                ->onDelete('cascade');

            $table->foreign('descendant')
                ->references('id')
                ->on('quizzes')
                ->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('quiz_closure');
        Schema::dropIfExists('quizzes');
    }
}
