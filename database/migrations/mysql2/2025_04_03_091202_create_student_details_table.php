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
        Schema::connection('mysql2')->create('student_details', function (Blueprint $table) {
            $table->id();
            $table->string('roll_no')->unique();
            $table->string('pr_no')->unique();
            $table->string('name');
            $table->string('ph_no');
            $table->string('email');
            $table->text('address');
            $table->string('course');
            $table->string('school_10th_name');
            $table->text('school_10th_address');
            $table->decimal('school_10th_percentage', 5, 2);
            $table->string('school_12th_name');
            $table->text('school_12th_address');
            $table->decimal('school_12th_percentage', 5, 2);
            $table->string('bachelor_college_name');
            $table->text('bachelor_college_address');
            $table->decimal('bachelor_percentage', 5, 2);
            $table->string('current_status');
            $table->string('final_year_passed');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::connection('mysql2')->dropIfExists('child_student');
    }
};
