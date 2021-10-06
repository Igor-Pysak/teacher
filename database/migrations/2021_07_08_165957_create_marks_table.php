<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMarksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->integer('id_students')->nullable();
            $table->integer('id_semestrs')->nullable();
            $table->string('mark1')->nullable();
            $table->string('mark2')->nullable();
            $table->string('mark3')->nullable();
            $table->string('mark4')->nullable();
            $table->string('mark5')->nullable();
            $table->string('mark6')->nullable();
            $table->string('mark7')->nullable();
            $table->string('mark8')->nullable();
            $table->string('mark9')->nullable();
            $table->string('mark10')->nullable();
            $table->string('semester_mark')->nullable();
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
        Schema::dropIfExists('marks');
    }
}
