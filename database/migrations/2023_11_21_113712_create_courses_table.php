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
        Schema::create('courses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('lecturer_id');
            $table->unsignedBigInteger('department_id');
            $table->unsignedBigInteger('classroom_id');
            $table->timestamps();

            $table->foreign('lecturer_id')->references('id')->on('lecturer')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('department')->onDelete('cascade');
            $table->foreign('classroom_id')->references('id')->on('classroom')->onDelete('cascade');
            $table->foreign('student_id')->references('id')->on('student')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
