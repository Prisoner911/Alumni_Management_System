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
        Schema::connection('mysql2')->create('child_student', function (Blueprint $table) {
            $table->string('roll_no')->primary();
            $table->string('pr_no');
            $table->string('name');
            $table->string('ph_no');
            $table->string('email')->unique();
            $table->string('alumni_status');
            $table->string('current_status');
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
