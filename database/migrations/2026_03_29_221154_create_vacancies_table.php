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
        Schema::create('vacancies', function (Blueprint $table) {
            $table->id();
            $table->string('slug')->unique();
            $table->string('company_name');
            $table->string('team');
            $table->string('employment_type');
            $table->string('work_model');
            $table->string('experience_level');
            $table->json('title');
            $table->json('excerpt');
            $table->json('description');
            $table->json('location');
            $table->json('highlights');
            $table->json('responsibilities');
            $table->json('requirements');
            $table->json('benefits');
            $table->string('currency', 3)->nullable();
            $table->unsignedInteger('salary_min')->nullable();
            $table->unsignedInteger('salary_max')->nullable();
            $table->string('salary_period')->default('yearly');
            $table->string('application_url');
            $table->boolean('is_featured')->default(false)->index();
            $table->boolean('is_published')->default(true)->index();
            $table->timestamp('posted_at')->nullable()->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vacancies');
    }
};
