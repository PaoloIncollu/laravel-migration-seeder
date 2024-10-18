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
            $table->bigInteger('id')->unsigned()->autoIncrement();
            $table->string('Azienda', 50);
            $table->string('Stazione Di Partenza', 50);
            $table->string('Stazione Di Arrivo', 50);
            $table->date('Data Di Partenza', 10);
            $table->time('Orario Di Partenza', 6);
            $table->time('Orario Di Arrivo', 6);
            $table->int('Codice Treno')->unsigned()->unique();
            $table->int('Numero Di Carrozze', 10)->nullable();
            $table->boolean('In Orario')->default(true);
            $table->boolean('Cancellato')->default(false);
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
