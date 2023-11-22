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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->integer('age');
            $table->unsignedBigInteger('classroom_id');
            $table->unsignedBigInteger('course_id');
            $table->unsignedBigInteger('hostels_id');
            $table->unsignedBigInteger('department_id');

            $table->timestamps();

            $table->foreign('classroom_id')->references('id')->on('classroom')->onDelete('cascade');
            $table->foreign('course_id')->references('id')->on('course')->onDelete('cascade');
            $table->foreign('hostels_id')->references('id')->on('hostels')->onDelete('cascade');
            $table->foreign('department_id')->references('id')->on('department')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
