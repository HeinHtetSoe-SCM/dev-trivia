<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('tests', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('position', false, true);
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('tests')
                ->onDelete('set null');

        });

        Schema::create('test_closure', function (Blueprint $table) {
            $table->increments('closure_id');

            $table->integer('ancestor', false, true);
            $table->integer('descendant', false, true);
            $table->integer('depth', false, true);

            $table->foreign('ancestor')
                ->references('id')
                ->on('tests')
                ->onDelete('cascade');

            $table->foreign('descendant')
                ->references('id')
                ->on('tests')
                ->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('test_closure');
        Schema::dropIfExists('tests');
    }
}
