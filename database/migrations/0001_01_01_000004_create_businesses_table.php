<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('domain')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->enum('plan', ['self_managed', 'fig_managed', 'fig_developed'])->nullable();
            $table->enum('status', ['unknown', 'active', 'suspended', 'cancelled'])->default('unknown');
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
