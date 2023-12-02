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
        Schema::create('user_certificates', function (Blueprint $table) {
            $table->foreignUuid('user_id')
                ->constrained("users")
                ->onDelete("cascade");
            $table->foreignUuid('certificate_id')
                ->constrained("certificates")
                ->onDelete("cascade");
            $table->string("range");
            $table->timestamp("end_date");
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_certificates');
    }
};
