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
        Schema::create('rent', function (Blueprint $table) {
            $table->id();
            
            $table->foreignId('building_id');
            $table->foreign('building_id')->references('id')->on('buildings');

            $table->foreignId('user_id');
            $table->foreign('user_id')->references('id')->on('users');

            $table->foreignId('lead_id');
            $table->foreign('lead_id')->references('id')->on('leads');

            $table->date('start_date');
            $table->date('end_date');
            $table->string('path', 128);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rent');
    }
};
