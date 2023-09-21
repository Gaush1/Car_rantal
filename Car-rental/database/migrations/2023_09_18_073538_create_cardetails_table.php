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
        Schema::create('cardetails', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('car_id'); // Foreign key to link with the car
            $table->foreign('car_id')->references('id')->on('cars')->onDelete('cascade');
            $table->text('description');
            $table->string('image');
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->string('body');
            $table->string('seat');
            $table->string('door');
            $table->integer('luggage');
            $table->text('fueltype');
            $table->integer('engine');
            $table->integer('year');
            $table->integer('mileage');
            $table->string('transmission');
            $table->string('drive');
            $table->decimal('fueleconomy', 10, 2);
            $table->string('exteriorcolor');
            $table->string('interiorcolor');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cardetails');
    }
};
