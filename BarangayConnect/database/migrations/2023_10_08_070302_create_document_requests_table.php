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
            $table->enum('document_type', ['Barangay Indigency', 'Barangay Certificate', 'Barangay Business Permit', 'Barangay ID'], 500);
            $table->enum('id_type', ['NSO with School ID', 'NBI CLearance', 'Voters ID', 'Drivers License', 'Voters Certificate','National ID','SSS'], 500);
            $table->string('id_number');
            $table ->string('status');
            $table->string('image')->nullable();
            $table->string('business_name')->nullable();
            $table->enum('address', ['Proper Nabunturan Barili Cebu', 'Sitio San Roque Nabunturan Barili Cebu', 'Sitio Cabinay Nabunturan Barili Cebu']);
            $table->date('birthday');
            $table->enum('civil_status', ['Single', 'Married', 'Widowed', 'Divorced']);
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
