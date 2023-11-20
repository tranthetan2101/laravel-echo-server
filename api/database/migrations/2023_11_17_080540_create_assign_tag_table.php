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
            $table->unsignedBigInteger("assign_id");
            $table->unsignedBigInteger("tag_id");
            $table->foreign("tag_id")
                ->references("id")
                ->on("tags")
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
