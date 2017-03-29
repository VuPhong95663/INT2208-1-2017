<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TableVideo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Videos', function ($table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->string('singer')->nullable();
            $table->text('description')->nullable();
            $table->integer('view')->nullable()->default(0);
            $table->integer('countlike')->nullable()->default(0);
            $table->string('image')->nullable();
            $table->string('source')->nullable();
            $table->string('eng')->nullable();
            $table->string('vi')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Videos');
    }
}
