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
        Schema::create('student', function (Blueprint $table) {
            $table->id();
            $table->string('adm_num')->nullable();
            $table->string('roll')->nullable();
            $table->string('class')->nullable();
            $table->string('section')->nullable();
            $table->string('first_name')->nullable();
            $table->string('last_name')->nullable();
            $table->string('gender')->nullable();
            $table->string('dob')->nullable();
            $table->string('catagory')->nullable();
            $table->string('religion')->nullable();
            $table->string('rte')->nullable();
            $table->string('mob_num')->nullable();
            $table->string('email')->nullable();
            $table->string('adm_date')->nullable();
            $table->string('photo')->nullable();
            $table->string('blood')->nullable();
            $table->string('house')->nullable();
            $table->string('height')->nullable();
            $table->string('weight')->nullable();
            $table->integer('user_id');
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->foreign('parent_id')->references('id')->on('student_parents')->onDelete('cascade');            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
