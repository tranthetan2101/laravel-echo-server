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
        Schema::create('shared_docs', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->foreignUuid('user_id')
                ->constrained('users')
                ->onDelete('cascade');
            $table->uuid("docs_id");
            $table->string("type");
            $table->foreignUuid('permission_id')
                ->constrained('permissions')
                ->onDelete('cascade');
            $table->timestamp("sharing_day");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('shared_docs');
    }
};
