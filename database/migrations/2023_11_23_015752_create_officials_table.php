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
        Schema::create('officials', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->string('email')->unique();
            $table->date('birthday');
            $table->string('contact_number');
            $table->enum('address', ['Proper Nabunturan Barili Cebu', 'Sitio San Roque Nabunturan Barili Cebu', 'Sitio Cabinay Nabunturan Barili Cebu']);
            $table->enum('gender', ['male', 'female']);
            $table->string('image')->nullable();
            $table->enum('position', ['Barangay Kagawad', 'Barangay Captain', 'Barangay Secretary', 'Barangay Treasurer', 'SK Chairman']);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('officials');
    }
};
