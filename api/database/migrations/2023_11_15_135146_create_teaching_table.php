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
            $table->foreignUuid('teacher_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignUuid('student_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignUuid('language_id')
                ->constrained('languages')
                ->onDelete('cascade');
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
