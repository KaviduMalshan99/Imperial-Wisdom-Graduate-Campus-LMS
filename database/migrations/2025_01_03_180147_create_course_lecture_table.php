<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('course_lecture', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('lecture_id');
            $table->foreign('course_id')->references('id')->on('courses');
            $table->foreign('lecture_id')->references('id')->on('lectures');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_lecture');
    }
};
