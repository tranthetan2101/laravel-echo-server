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
        Schema::create('assign_tag', function (Blueprint $table) {
            $table->string("assign_type");
            $table->uuid("assign_id");
            $table->foreignUuid("tag_id")
                ->constrained("tags")
                ->onDelete("cascade");
            $table->timestamp("assign_date");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('assign_tag');
    }
};
