<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRecordsTableMigration extends Migration
{
    public function up()
    {
        Schema::create('records', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('parent_id')->unsigned()->nullable();
            $table->integer('position', false, true);
            $table->softDeletes();

            $table->foreign('parent_id')
                ->references('id')
                ->on('records')
                ->onDelete('set null');

        });

        Schema::create('record_closure', function (Blueprint $table) {
            $table->increments('closure_id');

            $table->integer('ancestor', false, true);
            $table->integer('descendant', false, true);
            $table->integer('depth', false, true);

            $table->foreign('ancestor')
                ->references('id')
                ->on('records')
                ->onDelete('cascade');

            $table->foreign('descendant')
                ->references('id')
                ->on('records')
                ->onDelete('cascade');

        });
    }

    public function down()
    {
        Schema::dropIfExists('record_closure');
        Schema::dropIfExists('records');
    }
}
