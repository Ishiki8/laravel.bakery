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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date_reg')->useCurrent();
            $table->string('full_name', 50);
            $table->string('email', 50)->unique();
            $table->string('password', 255);
            $table->string('address', 200)->nullable();
            $table->string('phone_number', 11)->nullable();
            $table->unsignedBigInteger('role_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
