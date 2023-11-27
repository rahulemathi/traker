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
        Schema::create('mileages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('details_id')->constrained('details');
            $table->string('primary_km');
            $table->string('secondary_km');
            $table->string('fuel_injected');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mileages');
    }
};
