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
        Schema::create('banners', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->binary("image");
            $table->uuid("creator_id");
            $table->foreign("creator_id")
                ->references("id")
                ->on("users")
                ->onDelete("cascade");
            $table->uuid("language_id");
            $table->foreign("language_id")
                ->references("id")
                ->on("languages")
                ->onDelete("cascade");
            $table->timestamp("create_date");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
