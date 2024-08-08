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
        Schema::create('first_year_enrollments', function (Blueprint $table) {
            $table->id();
            $table->string('majorOrder');
            $table->string('m_name');
            $table->string('e_name');
            $table->string('nrc');
            $table->string('m_father');
            $table->string('e_father');
            $table->string('f_nrc')->nullable();
            $table->string('m_mother');
            $table->string('e_mother');
            $table->string('m_nrc')->nullable();
            $table->string('phone');
            $table->string('nation');
            $table->string('f_nation');
            $table->string('m_nation');
            $table->string('religion');
            $table->string('f_religion');
            $table->string('m_religion');
            $table->string('entry_no');
            $table->string('ten_roll_no');
            $table->string('ten_result_mark');
            $table->string('birth_area');
            $table->string('parent_address_and_phone');
            $table->string('student_address_and_phone');
            $table->string('kpay_id');
            $table->string('profile_photo');
            $table->string('screenshot_for_result_marks');
            $table->string('screenshot_for_certification');
            $table->string('screenshot_for_letter_of_recommendation');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('first_year_enrollments');
    }
};
