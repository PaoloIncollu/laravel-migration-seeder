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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string('company', 50);
            $table->string('departureStation', 50);
            $table->string('arrivalStation', 50);
            $table->date('departureDate');
            $table->time('departureTime', 6);
            $table->time('arrivalTime', 6);
            $table->unsignedInteger('trainCode');
            $table->integer('numberOfCarriages')->nullable();
            $table->boolean('onTime')->default(true);
            $table->boolean('deleted')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
