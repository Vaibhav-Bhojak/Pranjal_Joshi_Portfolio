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
        Schema::create('appointment_details', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->date('dob')->nullable();
            $table->string('gender')->nullable();
            $table->string('contact_mobile', 20);
            $table->text('address')->nullable();
            $table->date('appointment_date');
            $table->time('appointment_time');
            $table->string('appointment_type');
            $table->string('visit_reason')->nullable();
            $table->text('current_symptoms')->nullable();
            $table->text('allergies')->nullable();
            $table->string('past_psychiatric_history')->nullable();
            $table->text('additional_notes')->nullable();
            $table->string('status')->default(2)->comment('1 for pending, 2 for confirmed, 3 for completed, 4 for cancelled'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_details');
    }
};
