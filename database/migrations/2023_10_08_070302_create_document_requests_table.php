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
        Schema::create('document_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('tracker_number')->unique();
            $table->string('full_name');
            $table->text('purpose');
            $table->enum('document_type', ['Barangay Indigency', 'Barangay Certificate', 'Barangay Business Permit', 'Barangay ID']);
            $table->string('id_type'); // Change to VARCHAR
            $table->string('id_number');
            $table->string('status');
            $table->string('image')->nullable();
            $table->string('business_name')->nullable();
            $table->string('address');
            $table->date('birthday');
            $table->string('civil_status')->nullable();
            $table->string('gender')->nullable();
            $table->date('document_date')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('document_time');
            $table->timestamps();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_requests');
    }
};
