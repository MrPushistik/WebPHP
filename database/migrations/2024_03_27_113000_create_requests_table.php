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
        Schema::create('requests', function (Blueprint $table) {
            $table->id();

            $table->foreignId('lead_id');
            $table->foreign('lead_id')->references('id')->on('leads');

            $table->enum('type', ['Торговое помещение', 'Склад', 'Любой'])->default('Любой');
            $table->enum('heat', ['Центральное отопление', 'Котельная', 'Любой'])->default('Любой');
            $table->double('min_size', 6, 2);
            $table->double('max_size', 6, 2);
            $table->double('min_price', 10, 2);
            $table->double('max_price', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requests');
    }
};
