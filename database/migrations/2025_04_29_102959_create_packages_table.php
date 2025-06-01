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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('description')->nullable();
            $table->string('slug')->unique();
            $table->string('type')->nullable();
            $table->double('price', 10, 2)->default(0);
            $table->double('renew_price', 10, 2)->default(0);
            $table->enum('interval', ['monthly', 'weekly', 'fortnightly', 'yearly'])->default('yearly');
            $table->integer('interval_count')->default(1);
            $table->boolean('status')->default(1);
            $table->boolean('auto_renew')->default(1);
            $table->json('features')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
