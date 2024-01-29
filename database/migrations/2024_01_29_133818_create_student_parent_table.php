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
        Schema::create('student_parents', function (Blueprint $table) {
            $table->id();
            $table->string('f_name')->nullable();
            $table->string('f_phone')->nullable();
            $table->string('f_occp')->nullable();
            $table->string('f_photo')->nullable();
            $table->string('m_name')->nullable();
            $table->string('m_phone')->nullable();
            $table->string('m_occp')->nullable();
            $table->string('m_photo')->nullable();
            $table->string('g_name')->nullable();
            $table->string('g_phone')->nullable();
            $table->string('g_occp')->nullable();
            $table->string('g_photo')->nullable();
            $table->string('g_email')->nullable();
            $table->string('g_addr')->nullable();
            $table->string('g_relation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_parent');
    }
};
