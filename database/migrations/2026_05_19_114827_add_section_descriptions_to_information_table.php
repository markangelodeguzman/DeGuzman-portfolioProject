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
        Schema::table('information', function (Blueprint $table) {
            $table->text('resume_description')->nullable();
            $table->text('services_description')->nullable();
            $table->text('skills_description')->nullable();
            $table->text('projects_description')->nullable();
            $table->text('blog_description')->nullable();
            $table->text('contact_description')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('information', function (Blueprint $table) {
            $table->dropColumn([
                'resume_description',
                'services_description',
                'skills_description',
                'projects_description',
                'blog_description',
                'contact_description'
            ]);
        });
    }
};
