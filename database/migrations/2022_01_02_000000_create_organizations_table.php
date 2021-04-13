<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('organizations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('slug')->nullable();
            $table->string('plan')->nullable();
            $table->integer('seats')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void { Schema::dropIfExists('organizations'); }
};
