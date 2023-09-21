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
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image'); // You can store the image path or use Laravel's file storage
            $table->integer('storage'); // Laugage storage
            $table->integer('capacity'); // Capacity of siting
            $table->integer('doors'); // No. of doors
            $table->string('type'); // Vehicle type
            $table->string('bodytype'); // Car Body Type
            $table->decimal('price', 10, 2); // Example: 999999.99
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
