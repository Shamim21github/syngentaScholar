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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('application_name')->nullable();
            $table->string('institution_name')->nullable();
            $table->string('department')->nullable();
            $table->string('roll_no')->nullable();
            $table->string('session')->nullable();
            $table->string('semester')->nullable();
            $table->string('gender')->nullable();
            $table->date('date_of_birth')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('email')->unique()->nullable();
            $table->text('mailing_address')->nullable();
            $table->string('bkash_number')->nullable();
            $table->string('district')->nullable();
            $table->string('syngenta_knowledge')->nullable();
            $table->string('career_ambition')->nullable();
            $table->string('applicant_photo')->nullable();
            $table->string('student_id')->nullable();
            $table->string('applicant_nid')->nullable();
            $table->string('academic_performance_5th')->nullable();
            $table->string('academic_performance_6th')->nullable();
            $table->string('upload_docs')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
