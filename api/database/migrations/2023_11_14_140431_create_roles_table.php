<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Models\Role;
use App\Enums\Role as RoleEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('roles', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->enum("name", RoleEnum::VALUES)->unique();
            $table->string("description")->nullable();
        });
        $this->insertRole();
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('roles');
    }

    private function insertRole(): void
    {
        Role::query()->insert([
            [
                Role::ID => "9abc4607-0e41-4514-8cfe-1cbb5fd3a33c",
                Role::NAME => "admin",
                Role::DESCRIPTION => null
            ],
            [
                Role::ID => "9abc4607-0e41-4514-8cfe-1cbb5fd3a44c",
                Role::NAME => "teacher",
                Role::DESCRIPTION => null
            ],
            [
                Role::ID => "9abc4607-0e41-4514-8cfe-1cbb5fd3a55c",
                Role::NAME => "student",
                Role::DESCRIPTION => null
            ]
        ]);
    }
};
