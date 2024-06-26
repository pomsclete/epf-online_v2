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
        Schema::create('info_usuers', function (Blueprint $table) {
            $table->id();
            $table->string('telephone');
            $table->string('civilite');
            $table->string('niveau')->nullable();
            $table->string('serie')->nullable();
            $table->string('adresse');
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('info_usuers');
    }
};
