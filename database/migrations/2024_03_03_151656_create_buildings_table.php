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
        Schema::create('buildings', function (Blueprint $table) {
            $table->id();
            $table->string('address', 500);
            $table->double('size', 4, 2);
            $table->enum('type', ['Торговое помещение', 'Склад'])->default('Торговое помещение');
            $table->enum('heat', ['Центральное отопление', 'Котельная'])->default('Центральное отопление');
            $table->double('price', 8, 2);
            $table->string('desc', 1000);
            $table->enum('status', ['Свободно', 'Занято'])->default('Свободно');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('buildings');
    }
};
