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
        Schema::create('aide_sociales', function (Blueprint $table) {
            $table->id('numaid');
            $table->date('dataide');
            $table->text('motif');
            $table->unsignedBigInteger('codnat');
            $table->unsignedBigInteger('codanalys');
            $table->foreign('codnat')->references('codnat')->on('natures')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('codanalys')->references('codanalys')->on('analyses')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aide_sociales');
    }
};
