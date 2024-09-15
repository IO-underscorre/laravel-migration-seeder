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
            $table->string('transport_company', 150);
            $table->string('departure_station', 75);
            $table->string('arrival_station', 75);
            $table->dateTimeTz('departure_time');
            $table->dateTimeTz('arrival_time');
            $table->char('train_code', 6);
            $table->unsignedTinyInteger('train_carriages');
            $table->unsignedSmallInteger('delay')->default(0); // In minutes
            $table->boolean('is_cancelled')->default(false);
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
