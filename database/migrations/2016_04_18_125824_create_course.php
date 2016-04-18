<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCourse extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course', function (Blueprint $table) {
            $table->increments('section_id');
            $table->string('nama_section')->unique();
            $table->integer('course_course_id');
            $table->integer('video_id_video');
            $table->integer('materi_id_materi');
            $table->integer('soal_soal_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        schema::drop('course');
    }
}
