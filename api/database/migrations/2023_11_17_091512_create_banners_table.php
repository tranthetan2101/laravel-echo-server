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
            $table->foreignUuid("creator_id")
                ->constrained("users")
                ->onDelete("cascade");
            $table->foreignUuid("language_id")
                ->constrained("languages")
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
