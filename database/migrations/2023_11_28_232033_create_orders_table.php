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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamp('date')->useCurrent();
            $table->unsignedDecimal('price')->nullable();
            $table->unsignedTinyInteger('status')->default(0);
            $table->string('client_phone', 11)->nullable();
            $table->string('client_address', 200)->nullable();
            $table->unsignedBigInteger('user_id')->nullable()->index();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
