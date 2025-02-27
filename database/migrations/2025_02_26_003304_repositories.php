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
        Schema::create('repositories', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('github_id', unsigned: true)->unique();
            $table->string('url');
            $table->string('name');
            $table->text('description')->nullable();
            $table->integer('stars', unsigned: true);
            $table->integer('forks', unsigned: true);
            $table->string('language')->nullable();
            $table->string('repository_updated_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('repositories');
    }
};
