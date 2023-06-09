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
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();
            $table->tinyText('name');
            $table->tinyText('email');
            $table->tinyText('contact');
            $table->tinyText('qualification');
            $table->tinyText('hslc_mark_percent');
            $table->tinyText('hsslc_mark_percent')->nullable();
            $table->tinyText('graduate_mark_percent')->nullable();
            $table->tinyText('post_graduate_mark_percent')->nullable();
            $table->longText('aadhaar');
            $table->longText('passport_photo');
            $table->longText('work_experience')->nullable();
            // $table->longText('resume')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applicants');
    }
};
