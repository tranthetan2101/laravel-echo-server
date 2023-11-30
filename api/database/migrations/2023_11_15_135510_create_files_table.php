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
        Schema::create('files', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->uuid("directory_id");
            $table->foreign("directory_id")
                ->references("id")
                ->on("directories")
                ->onDelete("cascade");
            $table->string("name");
            $table->string("path");
            $table->string("extension");
            $table->integer("size");
            $table->uuid("creator_id");
            $table->foreign('creator_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('files');
    }
};
