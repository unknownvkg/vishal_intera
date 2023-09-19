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
        Schema::create('contractor_details', function (Blueprint $table) {
            $table->id('contractor_id');
            $table->string('full_name');
            $table->string('contractor_email')->unique();
            $table->string('contractor_password');
            $table->string('contractor_gender');
            $table->string('contractor_phone');
            $table->string('contractor_age');
            $table->string('contractor_experience_year');
            $table->integer('contractor_country');
            $table->integer('contractor_state');
            $table->integer('contractor_city');            
            $table->string('contractor_pincode');
            $table->string('contractor_complete_address');
            $table->string('contractor_aadharNo');
            $table->string('contractor_panNo');
            $table->string('contractor_profile');
            $table->string('registrationDate');
            $table->string('updated_by');
            $table->boolean('status')->default(1);
            $table->boolean('deleted')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contractor_details');
    }
};
