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
        Schema::create('information', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->string('job_title')->nullable();
            $table->text('description')->nullable();
            $table->string('hero_image')->nullable();
            $table->string('about_image')->nullable();
            $table->string('birth_date')->nullable();
            $table->string('address')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('email')->nullable();
            $table->string('phone')->nullable();
            $table->string('website')->nullable();
            $table->integer('projects_completed')->default(0);
            $table->string('cv_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('information');
    }
};
