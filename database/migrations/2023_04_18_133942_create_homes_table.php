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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('title')->nullable();
            $table->longText('head_title')->nullable();
            $table->text('quote')->nullable();
            $table->string('author')->nullable();
            $table->text('opportunity_title')->nullable();
            $table->string('text_one')->nullable();
            $table->string('text_two')->nullable();
            $table->string('text_three')->nullable();
            $table->string('text_four')->nullable();
            $table->string('text_five')->nullable();
            $table->string('text_six')->nullable();
            $table->string('photo')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homes');
    }
};
