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
        Schema::create('teaching', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("teacher_id");
            $table->foreign('teacher_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->uuid("student_id");
            $table->foreign('student_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->uuid("language_id");
            $table->foreign("language_id")
                ->references("id")
                ->on("languages")
                ->onDelete("cascade");
            $table->bigInteger("price");
            $table->float("hour_per_session");
            $table->integer("session_per_week");
            $table->timestamp("first_date");
            $table->timestamp("end_date");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teaching');
    }
};
