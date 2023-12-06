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
        Schema::create('teacher_languages', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignUuid('teacher_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->foreignUuid('language_id')
                ->constrained('languages')
                ->onDelete('cascade');
            $table->text("description");
            $table->bigInteger("price");
            $table->boolean("status");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teacher_languages');
    }
};
