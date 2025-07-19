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
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('about');
            $table->text('description')->nullable();
            $table->string('category')->nullable();
            $table->string('cover')->nullable();
            $table->json('screenshots')->nullable(); // Array untuk multiple gambar
            $table->string('client_name')->nullable();
            $table->foreignId('project_client_id')->nullable()->constrained()->onDelete('set null');
            $table->string('project_url')->nullable();
            $table->string('demo_url')->nullable();
            $table->string('github_url')->nullable();
            $table->json('technologies')->nullable(); // Array teknologi yang digunakan
            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();
            $table->string('status')->default('completed'); // completed, ongoing, paused
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);
            $table->integer('sort_order')->default(0);
            $table->timestamps();
            
            $table->index(['is_featured', 'is_active']);
            $table->index(['project_client_id', 'is_active']);
            $table->index(['status', 'is_active']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};