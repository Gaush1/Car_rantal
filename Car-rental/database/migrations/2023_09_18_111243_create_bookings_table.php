<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Foreign key to link to the User model
            $table->unsignedBigInteger('car_id'); // Foreign key to link to the Car model
            $table->string('car_name');
            $table->decimal('total_price', 10, 2);
            $table->string("pickuplocation");
            $table->string("dropofflocation");
            $table->dateTime('pickup_date');
            $table->dateTime('return_date');
            $table->enum('status',['completed','cancelled','scheduled'])->default('scheduled');
            $table->timestamps();

            // Define foreign key constraints
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};