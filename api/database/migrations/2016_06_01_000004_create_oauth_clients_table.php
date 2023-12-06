<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('oauth_clients', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->unsignedBigInteger('user_id')->nullable()->index();
            $table->string('name');
            $table->string('secret', 100)->nullable();
            $table->string('provider')->nullable();
            $table->text('redirect');
            $table->boolean('personal_access_client');
            $table->boolean('password_client');
            $table->boolean('revoked');
            $table->timestamps();
        });
        $this->createClientSecret();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('oauth_clients');
    }

    private function createClientSecret()
    {
        DB::table("oauth_clients")->insert([
            [
                "id" => "9abefb84-4c53-4f85-9f46-daf970e35882",
                "user_id" => null,
                "name" => "Laravel Personal Access Client",
                "secret" => "ehjM3tYNQq4OGxMLpgUancOKmchHsUooBmaNFDJL",
                "provider" => null,
                "redirect" => "http://localhost",
                "personal_access_client" => 1,
                "password_client" => 0,
                "revoked" => 0
            ],
            [
                "id" => "9abefb84-5e60-4e31-9e4a-72d4c18517fe",
                "user_id" => null,
                "name" => "Laravel Password Grant Client",
                "secret" => "8uyG2pdar0w9EF7rHmpj5jeAvU9TyFEk9jOAXvUa",
                "provider" => "users",
                "redirect" => "http://localhost",
                "personal_access_client" => 0,
                "password_client" => 1,
                "revoked" => 0
            ]
        ]);
    }
};
